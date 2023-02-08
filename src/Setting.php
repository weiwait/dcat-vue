<?php

namespace Weiwait\DcatVue;

use Dcat\Admin\Extend\Setting as Form;
use Dcat\Admin\Form\NestedForm;
use Dcat\Admin\Http\JsonResponse;

class Setting extends Form
{
    public function form()
    {
        $this->tab('站点', function (\Dcat\Admin\Widgets\Form $form) {
            $form->switch('weiwait_auth.enable_captcha', DcatVueServiceProvider::trans('auth.enable_captcha'))
                ->default(true);
            $form->vImage('weiwait_auth.background', DcatVueServiceProvider::trans('auth.background'));
            $form->array('weiwait_auth.footer', DcatVueServiceProvider::trans('auth.footer'), function (NestedForm $form) {
                $form->text('name', DcatVueServiceProvider::trans('auth.footers.name'));
                $form->text('path', DcatVueServiceProvider::trans('auth.footers.path'));
            });
        });
    }

    public function handle(array $input): JsonResponse
    {
        admin_setting(['weiwait_auth' => $input['weiwait_auth']]);

        return $this->response()->success('保存成功')->refresh();
    }

    public function default(): array
    {
        return [
            'weiwait_auth' => admin_setting_array('weiwait_auth'),
        ];
    }
}
