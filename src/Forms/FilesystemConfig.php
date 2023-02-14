<?php

namespace Weiwait\DcatVue\Forms;

use Dcat\Admin\Http\JsonResponse;
use Dcat\Admin\Widgets\Form;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use OSS\Core\OssException;
use OSS\Model\CorsConfig;
use OSS\Model\CorsRule;
use Weiwait\DcatVue\Helper;

class FilesystemConfig extends Form
{
    public function handle(array $input): JsonResponse
    {
        try {
            Helper::injectFilesystemConfig(collect($input));

            if ('oss' == $input['disk']) {
                $this->ossHandler($input);
            }

            admin_setting(['weiwait_filesystem' => $input]);

            is_file(app()->getCachedConfigPath()) && Artisan::call('config:cache');
        } catch (\Throwable $exception) {
            return $this->response()->error($exception->getMessage());
        }

        return $this->response()->success('修改成功');
    }

    /**
     * @throws OssException
     */
    protected function ossHandler(array $data)
    {
        $config = collect(admin_setting_array('weiwait_filesystem'));

        $originChanged = collect($config->get('oss_allowed_origins', []))->diff($data['oss_allowed_origins']);
        $methodChanged = collect($config->get('oss_allowed_methods', []))->diff($data['oss_allowed_methods']);
        $masChanged = collect($config->get('oss_mas', 0))->diff($data['oss_mas']);

        if ($originChanged->isNotEmpty() || $methodChanged->isNotEmpty() || $masChanged->isNotEmpty()) {
            $rule = new CorsRule();
            $rule->setMaxAgeSeconds($data['oss_mas']);

            foreach ($data['oss_allowed_methods'] as $method) {
                $rule->addAllowedMethod($method);
            }

            foreach ($data['oss_allowed_origins'] as $origin) {
                $rule->addAllowedOrigin($origin);
            }

            $config = new CorsConfig();
            $config->addRule($rule);
            $kernel = Storage::disk('oss')->getAdapter()->ossKernel();
            $kernel->putBucketCors($data['oss_bucket'], $config);
        }
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->radio('disk', '存储位置')
            ->options(['public' => '本地', 'oss' => '阿里云', 'cos' => '腾讯云', 'qiniu' => '七牛云'])
            ->default('public')
            ->when('oss', function (Form $form) {
                $form->text('oss_access_key', 'AccessKey');
                $form->text('oss_secret_key', 'SecretKey');
                $form->text('oss_bucket', 'Bucket');
                $form->text('oss_endpoint', 'Endpoint');

                $form->vList('oss_allowed_origins', 'origins');
                $form->checkbox('oss_allowed_methods', 'methods')
                    ->options(array_combine(['GET', 'POST', 'PUT', 'DELETE', 'HEAD'], ['GET', 'POST', 'PUT', 'DELETE', 'HEAD']));
                $form->number('oss_mas', '缓存时间')->default(0);
            })
            ->when('cos', function (Form $form) {
                $form->text('cos_app_id', 'Appid');
                $form->text('cos_secret_id', 'SecretId');
                $form->text('cos_secret_key', 'SecretKey');
                $form->text('cos_region', 'Region');
                $form->text('cos_bucket', 'Bucket');
                $form->text('cos_cdn', 'CDN');
            })
            ->when('qiniu', function (Form $form) {
                $form->text('qiniu_access_key', 'AccessKey');
                $form->text('qiniu_secret_key', 'SecretKey');
                $form->text('qiniu_bucket', 'Bucket');
                $form->text('qiniu_domain', '域名');
            });
    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default(): array
    {
        return admin_setting_array('weiwait_filesystem');
    }
}
