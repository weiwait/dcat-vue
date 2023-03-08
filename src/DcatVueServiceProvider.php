<?php

namespace Weiwait\DcatVue;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Illuminate\Support\Facades\Event;
use Weiwait\DcatVue\Field\Checkbox;
use Weiwait\DcatVue\Field\DateRange;
use Weiwait\DcatVue\Field\Distpicker;
use Weiwait\DcatVue\Field\File;
use Weiwait\DcatVue\Field\Image;
use Weiwait\DcatVue\Field\KeyValue;
use Weiwait\DcatVue\Field\ListField;
use Weiwait\DcatVue\Field\MultipleFile;
use Weiwait\DcatVue\Field\MultipleImage;
use Weiwait\DcatVue\Field\MultipleSelect;
use Weiwait\DcatVue\Field\Number;
use Weiwait\DcatVue\Field\Select;
use Weiwait\DcatVue\Field\Tag;

class DcatVueServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/helper.js',
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

        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        $this->hackConfigs();

        $this->exceptRoutes = [
            'auth' => 'weiwait*',
            'permission' => 'weiwait*',
        ];

//		Form::extend('vue', Vue::class);
		Form::extend('vFile', File::class);
		Form::extend('vMultipleFile', MultipleFile::class);
        Form::extend('vImage', Image::class);
        Form::extend('vMultipleImage', MultipleImage::class);
        Form::extend('vTags', Tag::class);
        Form::extend('vList', ListField::class);
        Form::extend('vKeyValue', KeyValue::class);
        Form::extend('vDistpicker', Distpicker::class);
        Form::extend('vDateRange', DateRange::class);
        Form::extend('vSelect', Select::class);
        Form::extend('vMultipleSelect', MultipleSelect::class);
        Form::extend('vNumber', Number::class);
        Form::extend('vCheckbox', Checkbox::class);

        Admin::requireAssets('@weiwait.dcat-vue');
	}

	public function settingForm()
	{
		return new Setting($this);
	}

    protected function hackConfigs()
    {
        if (is_file(app()->getCachedConfigPath())) {
            return;
        }

        $configs = collect(admin_setting_array('weiwait_filesystem'));

        app()->booted(function () use ($configs) {
            Helper::injectFilesystemConfig($configs);
            Helper::injectAuthConfigs();
        });

        Event::listen('admin:booted', function () use ($configs) {
            config()->set('admin.upload.disk', $configs->get('disk', config('admin.upload.disk')));
        });
    }
}
