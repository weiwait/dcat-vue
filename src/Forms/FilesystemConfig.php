<?php

namespace Weiwait\DcatVue\Forms;

use Dcat\Admin\Widgets\Form;
use Weiwait\DcatVue\Models\FilesystemConfig as Model;

class FilesystemConfig extends Form
{
    /**
     * Handle the form request.
     *
     * @param array $input
     *
     * @return mixed
     */
    public function handle(array $input)
    {
        return Model::adminFormHandle($this, $input);
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->radio('disk', '存储位置')
            ->options(['public' => '本地', 'oss' => '阿里云', 'cosv5' => '腾讯云', 'qiniu' => '七牛云'])
            ->default('public')
            ->when('oss', function (Form $form) {
                $form->text('oss_access_key', 'AccessKey');
                $form->text('oss_secret_key', 'SecretKey');
                $form->text('oss_bucket', 'Bucket');
                $form->text('oss_endpoint', 'Endpoint');
            })
            ->when('cosv5', function (Form $form) {
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
        return Model::get([
            'disk',
            'oss_access_key',
            'oss_secret_key',
            'oss_endpoint',
            'oss_bucket',

            'qiniu_access_key',
            'qiniu_secret_key',
            'qiniu_bucket',
            'qiniu_domain',


            'cos_app_id',
            'cos_secret_id',
            'cos_secret_key',
            'cos_region',
            'cos_bucket',
            'cos_cdn',
        ]);
    }
}
