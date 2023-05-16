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
use Weiwait\DcatVue\Field\Icon;
use Weiwait\DcatVue\Field\Image;
use Weiwait\DcatVue\Field\KeyValue;
use Weiwait\DcatVue\Field\ListField;
use Weiwait\DcatVue\Field\MultipleFile;
use Weiwait\DcatVue\Field\MultipleImage;
use Weiwait\DcatVue\Field\MultipleSelect;
use Weiwait\DcatVue\Field\Number;
use Weiwait\DcatVue\Field\Select;
use Weiwait\DcatVue\Field\Sku;
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
        Form::extend('icon', Icon::class);
        Form::extend('vIcon', Icon::class);
        Form::extend('oIcon', Form\Field\Icon::class);
        Form::extend('vSku', Sku::class);

        Admin::requireAssets('@weiwait.dcat-vue');

        $this->injectColorToIcon();
	}

	public function settingForm(): Setting
    {
		return new Setting($this);
	}

    protected function hackConfigs(): void
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

    private function injectColorToIcon(): void
    {
        $colors = admin_setting_array('weiwait_icon_color');

        $style = '';
        foreach ($colors as $color) {
            $class = str_replace('#', '-', $color);
            $style .= ".vic$class{color:$color}";
        }

        Admin::style($style);
    }
}
