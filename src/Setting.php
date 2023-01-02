<?php

namespace Weiwait\DcatVue;

use Dcat\Admin\Extend\Setting as Form;
use Dcat\Admin\Models\Menu;
use Weiwait\DcatVue\Models\FilesystemConfig;

class Setting extends Form
{
    public function form()
    {
        $this->switch('independent', '独立菜单')
            ->default(FilesystemConfig::get(FilesystemConfig::INDEPENDENT, false));
        $this->text('menu_name', '菜单名称')->default(__('文件存储'));
    }

    public function handle(array $input): \Dcat\Admin\Http\JsonResponse
    {
        FilesystemConfig::set(['independent' => (boolean)$input['independent']]);

        /** @var Menu $menu */
        $menu = config('admin.database.menu_model');

        if ($input['independent']) {
            $res = $menu::query()->updateOrCreate(
                ['uri' => 'dcat-filesystem-config'],
                [
                    'title' => $input['menu_name'],
                    'show' => 1,
                    'icon' => 'fa-envelope',
                ]
            );

            FilesystemConfig::set(['independent_menu_id' => $res->getKey()]);

            return $this->response()->success('菜单已生成')->refresh();
        } else {
            if ($menu = $menu::query()->find(FilesystemConfig::get('independent_menu_id'))) {
                $menu->delete();
            }

            return $this->response()->success('菜单已删除')->refresh();
        }
    }
}
