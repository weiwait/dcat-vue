<?php

namespace Weiwait\DcatVue;

use Illuminate\Support\Collection;
use QCloud\COSSTS\Sts;

class Helper
{
    public static function injectFilesystemConfig(Collection $configs): void
    {
        config()->set('filesystems.disks.oss', [
            'access_key' => $configs->get('oss_access_key'),
            'secret_key' => $configs->get('oss_secret_key'),
            'endpoint' => $configs->get('oss_endpoint'),
            'bucket' => $configs->get('oss_bucket'),
            'driver' => 'oss',
            'root' => '',
            'isCName' => false,
        ]);

        config()->set('filesystems.disks.qiniu', [
            'access_key' => $configs->get('qiniu_access_key'),
            'secret_key' => $configs->get('qiniu_secret_key'),
            'domain' => $configs->get('qiniu_domain'),
            'bucket' => $configs->get('qiniu_bucket'),
            'driver' => 'qiniu',
        ]);

        config()->set('filesystems.disks.cosv5', [
            'driver' => 'cosv5',
            'region' => $configs->get('cos_region'),
            'credentials' => [
                'appId' => $configs->get('cos_app_id'),
                'secretId' => $configs->get('cos_secret_id'),
                'secretKey' => $configs->get('cos_secret_key'),
                'token' => null,
            ],
            'timeout' => 60,
            'connect_timeout' => 60,
            'bucket' => $configs->get('cos_bucket'),
            'cdn' => $configs->get('cos_cdn'),
            'scheme' => config('admin.https') ? 'https' : 'http',
            'read_from_cdn' => false,
            'cdn_key' => null,
            'encrypt' => false,
        ]);

        config()->set('filesystems.disks.cos', [
            'driver' => 'cos',
            'region' => $configs->get('cos_region'),
            'app_id' => $configs->get('cos_app_id'),
            'secret_id' => $configs->get('cos_secret_id'),
            'secret_key' => $configs->get('cos_secret_key'),
            'token' => null,
            'bucket' => $configs->get('cos_bucket'),
            'cdn' => $configs->get('cos_cdn'),
            'use_https' => config('admin.https'),
            'read_from_cdn' => false,
            'cdn_key' => null,
            'encrypt' => false,
            'guzzle' => [
                'timeout' => 60,
                'connect_timeout' => 60,
            ],
        ]);

        config()->set('filesystems.default', $configs->get('disk', config('filesystems.default')));

        config()->set('admin.upload.disk', $configs->get('disk', config('admin.upload.disk')));
    }

    public static function getCosAuth(): array
    {
        // 配置参数
        $config = array(
            'url' => 'https://sts.tencentcloudapi.com/',
            'domain' => 'sts.tencentcloudapi.com',
            'proxy' => '',
            'secretId' => config('filesystems.disks.cos.secret_id'), // 固定密钥
            'secretKey' => config('filesystems.disks.cos.secret_key'), // 固定密钥
            'bucket' => config('filesystems.disks.cos.bucket') . '-' . config('filesystems.disks.cos.app_id'), // 换成你的 bucket
            'region' => config('filesystems.disks.cos.region'), // 换成 bucket 所在园区
            'durationSeconds' => 1800, // 密钥有效期
            // 允许操作（上传）的对象前缀，可以根据自己网站的用户登录态判断允许上传的目录，例子： user1/* 或者 * 或者a.jpg
            // 请注意当使用 * 时，可能存在安全风险，详情请参阅：https://cloud.tencent.com/document/product/436/40265
            'allowPrefix' => '*',
            // 密钥的权限列表。简单上传和分片需要以下的权限，其他权限列表请看 https://cloud.tencent.com/document/product/436/31923
            'allowActions' => array(
                // 所有 action 请看文档 https://cloud.tencent.com/document/product/436/31923
                // 简单上传
                'name/cos:PutObject',
                'name/cos:PostObject',
                // 分片上传
                'name/cos:InitiateMultipartUpload',
                'name/cos:ListMultipartUploads',
                'name/cos:ListParts',
                'name/cos:UploadPart',
                'name/cos:CompleteMultipartUpload'
            )
        );

        // 获取临时密钥，计算签名
        return (new Sts())->getTempKeys($config);
    }

    public static function injectAuthConfigs()
    {
        config()->set('captcha.default.length', 4);
        config()->set('captcha.default.height', 34);
        config()->set('captcha.default.width', 100);
        config()->set('captcha.default.quality', 100);
    }
}
