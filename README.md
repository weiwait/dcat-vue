# Dcat Admin Extension

##### 此扩展为大合一扩展，以后使用vue3构建的组件都将合并在一起

### 演示地址
[demo: http://dcat.weiwait.cn (admin:admin)](http://dcat.weiwait.cn/admin/demo-settings 'user: admin psw: admin')

### 依赖扩展
[freyo/flysystem-qcloud-cos-v5](https://github.com/freyo/flysystem-qcloud-cos-v5)

[overtrue/laravel-filesystem-qiniu](https://github.com/overtrue/laravel-filesystem-qiniu)

[iiDestiny/laravel-filesystem-oss](https://github.com/iiDestiny/laravel-filesystem-oss)

### 通过 composer 安装扩展
```shell
  composer require weiwait/dcat-vue
```

### 通过选项卡使用
```php
    public function index(Content $content): Content
    {
        $tab = Tab::make();
        $tab->add('文件存储', new \Weiwait\DcatVue\Forms\FilesystemConfig());

        return $content->title('配置')
            ->body($tab->withCard());
    }
```

### 通过一级菜单使用

![](https://github.com/weiwait/images/blob/main/dcat-smtp-menu.png?raw=true)

### 示例图片

![示例图片](https://raw.githubusercontent.com/weiwait/images/main/dcat-filesystem-config.png)

### 直传表单组件
```php
    // 默认替换了原有的组件
    $form->file('file');
    $form->mutipleFile('files');
```

[comment]: <> (### Donate)

[comment]: <> (![示例图片]&#40;https://github.com/weiwait/images/blob/main/donate.png?raw=true&#41;)

### Dcat-admin 扩展列表
1. [单图裁剪](https://github.com/weiwait/dcat-cropper)
2. [区划级联+坐标拾取](https://github.com/weiwait/dcat-distpicker)
3. [smtp快速便捷配置](https://github.com/weiwait/dcat-smtp)
4. [sms channel 快速便捷配置](https://github.com/weiwait/dcat-easy-sms)
