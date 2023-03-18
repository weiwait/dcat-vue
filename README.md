# Dcat Admin Extension

##### 此扩展为大合一扩展，以后使用vue3构建的组件都将合并在一起

### 演示地址
[demo: http://dcat.weiwait.cn (admin:admin)](http://dcat.weiwait.cn/admin/demo-settings 'user: admin psw: admin')

### 依赖扩展
[overtrue/laravel-filesystem-cos](https://github.com/overtrue/laravel-filesystem-cos)

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

[//]: # (### 文件系统-通过一级菜单使用)

[//]: # ()
[//]: # (![]&#40;https://github.com/weiwait/images/blob/main/dcat-smtp-menu.png?raw=true&#41;)

##### 文件系统
![文件系统](https://raw.githubusercontent.com/weiwait/images/main/dcat-filesystem-config.png)
##### 行政区划、坐标
![区划选择](https://raw.githubusercontent.com/weiwait/images/main/dcat-v-distpicker.png)
##### 图片裁剪(支持多图)
![区划选择](https://raw.githubusercontent.com/weiwait/images/main/dcat-v-cropper.png)
##### 日期范围
![区划选择](https://raw.githubusercontent.com/weiwait/images/main/dcat-v-daterange.png)
##### 列表、选择
![区划选择](https://raw.githubusercontent.com/weiwait/images/main/dcat-v-other.png)

### 已有表单组件(采用的是Naive UI)
```php
    $form->vFile('file') // 关联文件系统配置-直传
        ->accept('mime types');
        
    $form->vMutipleFile('files') // 关联文件系统配置-直传
        ->mimeTypes('video/*');
        
    $form->vImage('image') // 关联文件系统配置-直传-裁剪
        ->ratio(16 / 9) // 固定裁剪比例
        ->large() // 放大裁剪框
        ->resolution(1920, 1080) // 重置图片分辨率
        ->jpeg(0.8) // 裁剪为jpeg格式, 参数为图片质量0-1
        ->disableCropper() // 关闭裁剪弹窗
        ->mimeTypes('image/*');
        
    $form->vMultipleImage('images') // 关联文件系统配置-直传-裁剪
        ->ratio(16 / 9) // 固定裁剪比例
        ->large() // 放大裁剪框
        ->resolution(1920, 1080) // 重置图片分辨率
        ->jpeg(0.8) // 裁剪为jpeg格式, 参数为图片质量0-1
        ->mimeTypes('image/*');
     // 标签
     // each vComponent has watch method
    $form->vTags('tags')
        ->watch('list as field name', <<<JS
            (target, current, store) => {
                // the tag component of naive ui expect format: {label: string, value: string}
                current.options.push({label: target, value: target});
                
                store.request({method: 'get', url: '/admin'})
                    .then(res => console.log(res));
                console.log(store.forms.list)
            }
        JS);
    
    $form->vList('list')
        ->sortable() // 开启排序
        ->max(8); // 限制最大添加数量
        
    $form->vKeyValue('kvs')
        ->sortable() // 开启排序
        ->serial() // 开启固定有序索引 默认为字母A-Z
        ->keys(['一', '二', '三', '四']) // serial后自定义索引
        ->list(); // serial后只提交值，保存为一维数组(索引仅作为显示)
        
    $form->vDistpicker('region')
        ->dist('province', 'city', 'district') // 开启区划
        ->coordinate('latitude', 'longitude') // 开启坐标
        ->detail('detail') // 开启详细地址
        ->disableMap() // 关闭地图
        ->mapHeight(380) // 地图高度，默认380
        ->disableRegions([440000]) // 禁用一些区划
        ->mapZoom(11); // 地图默认缩放
        ->mapZoom(11, 'zoom') // 记录地图缩放级别

    $form->vSelect('select')
        ->options(['123', '456', 'A' => 'aaa']) // 选项
        ->concatKey('separator') // 显示键
        ->optionsFromKeyValue('kvs'); // 用于结合vKeyValue进行选项选择

    $form->vMultipleSelect('ms', '多选')
        ->options(['123', '456', 'A' => 'aaa']) // 选项
        ->concatKey('separator') // 显示键
        ->optionsFromKeyValue('kvs'); // 用于结合vKeyValue进行选项选择

    $form->vNumber('number', '数字')
        ->prepend('$') // 前缀
        ->prepend('p') // 后缀
        ->bothButton() // 按钮位置分离到两端
        ->step(2) // 步进
        ->min(2) // 最小值
        ->max(88) // 最大值
        ->precision(2); // 开启小数，精度
```

##### 登录验证码
![示例图片](https://github.com/weiwait/images/blob/main/dcat-auth.png?raw=true)

```php
class SettingController extends Controller
{
    public function index(Content $content): Content
    {
        $tab = Tab::make();
        $tab->add('站点配置', new AuthSetting());

        return $content->title('配置')
            ->body($tab->withCard());
    }
}
```

[comment]: <> (### Donate)

[comment]: <> (![示例图片]&#40;https://github.com/weiwait/images/blob/main/donate.png?raw=true&#41;)

### Dcat-admin 扩展列表

[//]: # (1. [图片裁剪]&#40;https://github.com/weiwait/dcat-cropper&#41;)

[//]: # (2. [区划级联+坐标拾取]&#40;https://github.com/weiwait/dcat-distpicker&#41;)
3. [smtp 便捷配置](https://github.com/weiwait/dcat-smtp)
4. [sms channel 便捷配置](https://github.com/weiwait/dcat-easy-sms)
