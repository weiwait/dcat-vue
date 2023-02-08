<?php

namespace Weiwait\DcatVue\Forms;

use Dcat\Admin\Extend\Setting as Form;
use Dcat\Admin\Form\NestedForm;
use Illuminate\Support\Facades\Artisan;
use Weiwait\DcatVue\DcatVueServiceProvider;

class AuthSetting extends Form
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
        admin_setting(['weiwait_auth' => $input]);

        is_file(app()->getCachedConfigPath()) && Artisan::call('config:cache');

        return $this
            ->response()
            ->success('保存成功')
            ->refresh();
    }

    public function form()
    {
        $this->switch('enable_captcha', DcatVueServiceProvider::trans('auth.enable_captcha'))
            ->default(true);
        $this->vImage('background', DcatVueServiceProvider::trans('auth.background'));
        $this->array('footer', DcatVueServiceProvider::trans('auth.footer'), function (NestedForm $form) {
            $form->text('name', DcatVueServiceProvider::trans('auth.footers.name'));
            $form->text('path', DcatVueServiceProvider::trans('auth.footers.path'));
        });
    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default()
    {
        return admin_setting_array('weiwait_auth');
    }
}
