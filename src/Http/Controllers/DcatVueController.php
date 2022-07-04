<?php

namespace Weiwait\DcatVue\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Qiniu\Config;
use Weiwait\DcatVue\Forms\FilesystemConfig;
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
                $url = (new Config())->getUpHost(
                    config('filesystems.disks.qiniu.access_key'),
                    config('filesystems.disks.qiniu.bucket')
                );
                return [
                    'token' => Storage::disk('qiniu')->getAdapter()->getUploadToken($request['filename'], 3600),
                    'host' => $url,
                ];
            case 'cos':
            case 'cosv5':
                $url = parse_url(Storage::disk('cosv5')->url(''));
                return [
                    'auth' => Storage::disk('cosv5')->getFederationTokenV3($request['filename']),
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
}
