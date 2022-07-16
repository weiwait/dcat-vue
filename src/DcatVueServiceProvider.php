<?php

namespace Weiwait\DcatVue;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Illuminate\Support\Facades\Event;
use Weiwait\DcatVue\Field\File;
use Weiwait\DcatVue\Field\Image;
use Weiwait\DcatVue\Field\MultipleFile;
use Weiwait\DcatVue\Field\MultipleImage;
use Weiwait\DcatVue\Field\Tag;
use Weiwait\DcatVue\Field\Vue;
use Weiwait\DcatVue\Models\FilesystemConfig;

class DcatVueServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

        $this->hackConfigs();

//		Form::extend('vue', Vue::class);
		Form::extend('file', File::class);
		Form::extend('multipleFile', MultipleFile::class);
        Form::extend('image', Image::class);
        Form::extend('multipleImage', MultipleImage::class);
        Form::extend('tags', Tag::class);

        Admin::asset()->css(Admin::asset()->getAlias('@weiwait.dcat-vue')['css']);

        $this->publishable();
	}

	public function settingForm()
	{
		return new Setting($this);
	}

    protected function hackConfigs()
    {
        app()->booted(function () {
            config()->set('filesystems.disks.oss', [
                'access_key' => FilesystemConfig::get('oss_access_key'),
                'secret_key' => FilesystemConfig::get('oss_secret_key'),
                'endpoint' => FilesystemConfig::get('oss_endpoint'),
                'bucket' => FilesystemConfig::get('oss_bucket'),
                'driver' => 'oss',
                'root' => '',
                'isCName' => false,
            ]);

            config()->set('filesystems.disks.qiniu', [
                'access_key' => FilesystemConfig::get('qiniu_access_key'),
                'secret_key' => FilesystemConfig::get('qiniu_secret_key'),
                'domain' => FilesystemConfig::get('qiniu_domain'),
                'bucket' => FilesystemConfig::get('qiniu_bucket'),
                'driver' => 'qiniu',
            ]);

            config()->set('filesystems.disks.cosv5', [
                'driver' => 'cosv5',
                'region'          => FilesystemConfig::get('cos_region'),
                'credentials'     => [
                    'appId'     => FilesystemConfig::get('cos_app_id'),
                    'secretId'  => FilesystemConfig::get('cos_secret_id'),
                    'secretKey' => FilesystemConfig::get('cos_secret_key'),
                    'token'     => null,
                ],
                'timeout'         => 60,
                'connect_timeout' => 60,
                'bucket'          => FilesystemConfig::get('cos_bucket'),
                'cdn'             => FilesystemConfig::get('cos_cdn'),
                'scheme'          => config('admin.https') ? 'https' : 'http',
                'read_from_cdn'   => false,
                'cdn_key'         => null,
                'encrypt'         => false,
            ]);

            config()->set('filesystems.default', FilesystemConfig::get('disk', config('filesystems.default')));
        });

        Event::listen('admin:booted', function () {
            config()->set('admin.upload.disk', FilesystemConfig::get('disk', config('admin.upload.disk')));
        });
    }
}
