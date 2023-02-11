<?php

namespace Weiwait\DcatVue\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Qiniu\Config;
use Weiwait\DcatVue\Forms\FilesystemConfig;
use Weiwait\DcatVue\Helper;
use Weiwait\DcatVue\Models\ChinaArea;
use Weiwait\DcatVue\Models\WeiwaitUpload;

class DcatVueController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(Admin::view('weiwait.dcat-vue::index'));
    }

    public function uploaded(Request $request)
    {
        WeiwaitUpload::clearUnusedFiles();

        WeiwaitUpload::query()
            ->insert(array_map(fn($item) => ['name' => $item, 'created_at' => now(), 'disk' => $request['disk']],
                (array)$request['files']
            ));

        return Storage::disk($request['disk'])->url($request['files']);
    }

    public function obsConfig(Request $request)
    {
        switch ($request['disk']) {
            case 'oss':
                return json_decode(
                    Storage::disk('oss')->getAdapter()->signatureConfig(prefix: dirname($request['filename']), expire: 3600),
                    true
                );

            case 'qiniu':
                $config = new Config();
                $config->useHTTPS = 'https' == $request->getScheme();

                $url = $config->getUpHost(
                    config('filesystems.disks.qiniu.access_key'),
                    config('filesystems.disks.qiniu.bucket')
                );

                return [
                    'token' => Storage::disk('qiniu')->getAdapter()->getUploadToken($request['filename'], 3600),
                    'host' => $url,
                ];
            case 'cos':
            case 'cosv5':
                $url = parse_url(Storage::disk('cos')->url(''));
                $auth = Helper::getCosAuth();
                return [
                    'auth' => [
                        'token' => Arr::get($auth, 'credentials.sessionToken'),
                    ],
                    'host' => $url['scheme'] . '://' . $url['host'] . '/' . $request['filename'],
                ];
            default:
                return [
                    'host' => route('dcat.admin.weiwait.file.upload'),
                ];
        }
    }

    public function upload(Request $request)
    {
        if ($file = $request->file('file')) {
            $name = basename($request['key']);
            $path = dirname($request['key']);

            Storage::disk()->putFileAs($path, $file, $name);

            return [
                'key' => $request['key']
            ];
        }

        return response($request->all(), 400);
    }

    public function filesystem(Content $content): Content
    {
        return $content
            ->body(new FilesystemConfig());
    }

    public function regions(Request $request)
    {
        $items = ChinaArea::query()->where('pcode', $request->get('pcode', 0))
            ->get(['code as value', 'name as label', 'pcode']);

        return response()->json(['items' => $items]);
    }

    public function address2ll(Request $request)
    {
        $sign =  'rYRi7PfL5beOtUfcABaF4MIFHaHGDPE';

        $uri = "/ws/geocoder/v1/?address={$request['address']}&key=ZZQBZ-WE6E2-FCMUZ-CBUZ7-ZW5I3-I7BIX";
        $uri .= '&sig=' . md5($uri . $sign);

        return Http::get('https://apis.map.qq.com' . $uri)->body();
    }

    public function ll2address(Request $request)
    {
        return Http::get("https://apis.map.qq.com/ws/geocoder/v1/?location={$request['lat']},{$request['lng']}&key=ZZQBZ-WE6E2-FCMUZ-CBUZ7-ZW5I3-I7BIX&get_poi=1")->body();
    }

    public function syncStorage(Request $request)
    {
        $request->validate([
            'source' => 'required|string',
            'target' => 'required|string',
            'timeout' => 'required|integer',
            'max' => 'required|integer',
        ]);

        $start = now();

        try {
            $source = Storage::disk($request['source']);
            $source->put('/sync-touch', 'touch');
            $source->delete('sync-touch');

            $target = Storage::disk($request['target']);
            $target->put('/sync-touch', 'touch');
            $target->delete('sync-touch');
        } catch (\Throwable $exception) {
            return 2;
        }

        try {
            $sources = $source->allFiles('/');
            $targets = $target->allFiles('/');

            $files = array_diff($sources, $targets);

            foreach ($files as $file) {
                if (now()->diffInSeconds($start) > $request['timeout']) {
                    return 0;
                }

                if ($source->size($file) > ($request['max'] * 1024 * 1024)) {
                    continue;
                }

                $target->put($file, $source->get($file));
            }

            return 1;
        } catch (\Throwable $exception) {

        }

        return 0;
    }
}
