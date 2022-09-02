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

### 文件系统-通过选项卡使用
```php
    public function index(Content $content): Content
    {
        $tab = Tab::make();
        $tab->add('文件存储', new \Weiwait\DcatVue\Forms\FilesystemConfig());

        return $content->title('配置')
            ->body($tab->withCard());
    }
```

### 文件系统-通过一级菜单使用

![](https://github.com/weiwait/images/blob/main/dcat-smtp-menu.png?raw=true)

### 示例图片

![示例图片](https://raw.githubusercontent.com/weiwait/images/main/dcat-filesystem-config.png)

### 已有表单组件
```php
    $form->vFile('file') // 关联文件系统配置-直传
        ->accept('mime types');
        
    $form->vMutipleFile('files') // 关联文件系统配置-直传
        ->accept('mime types');
        
    $form->vImage('image') // 关联文件系统配置-直传-裁剪
        ->ratio(16 / 9) // 固定裁剪比例
        ->large() // 放大裁剪框
        ->resolution(1920, 1080) // 重置图片分辨率
        ->jpeg(0.8) // 裁剪为jpeg格式, 参数为图片质量0-1
        ->accept('mime types');
        
    $form->vMultipleImage('images') // 关联文件系统配置-直传-裁剪
        ->ratio(16 / 9) // 固定裁剪比例
        ->large() // 放大裁剪框
        ->resolution(1920, 1080) // 重置图片分辨率
        ->jpeg(0.8) // 裁剪为jpeg格式, 参数为图片质量0-1
        ->accept('mime types');
        
    $form->vTags('tags');
```

[comment]: <> (### Donate)

[comment]: <> (![示例图片]&#40;https://github.com/weiwait/images/blob/main/donate.png?raw=true&#41;)

### Dcat-admin 扩展列表
1. [图片裁剪](https://github.com/weiwait/dcat-cropper)
2. [区划级联+坐标拾取](https://github.com/weiwait/dcat-distpicker)
3. [smtp 便捷配置](https://github.com/weiwait/dcat-smtp)
4. [sms channel 便捷配置](https://github.com/weiwait/dcat-easy-sms)
