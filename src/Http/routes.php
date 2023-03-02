<?php

use Weiwait\DcatVue\Http\Controllers;
use Illuminate\Support\Facades\Route;

// 文件存储配置表单
Route::get('dcat-filesystem-config', [Controllers\DcatVueController::class, 'filesystem']);
// 各个驱动直传配置
Route::get('weiwait/file/obs-config', [Controllers\DcatVueController::class, 'obsConfig'])
    ->name('weiwait.file.obs-config');
// 文件上传后回调
Route::post('weiwait/file/uploaded', [Controllers\DcatVueController::class, 'uploaded'])
    ->name('weiwait.file.uploaded');
// 本地上传
Route::post('weiwait/file/upload', [Controllers\DcatVueController::class, 'upload'])
    ->name('weiwait.file.upload');
// 区划
Route::get('weiwait/distpicker/regions', [Controllers\DcatVueController::class, 'regions'])
    ->name('weiwait.distpicker.regions');
// 地址解析
Route::get('weiwait/distpicker/address2ll', [Controllers\DcatVueController::class, 'address2ll'])
    ->name('weiwait.distpicker.address2ll');
// 坐标位置信息
Route::get('weiwait/distpicker/ll2address', [Controllers\DcatVueController::class, 'll2address'])
    ->name('weiwait.distpicker.ll2address');

// 替换原生登录
Route::get('auth/login', [Controllers\DcatAuthController::class, 'getLogin']);
Route::post('auth/login', [Controllers\DcatAuthController::class, 'postLogin']);

// 同步存储
Route::post('weiwait/storage/sync', [Controllers\DcatVueController::class, 'syncStorage'])
    ->name('weiwait.storage.sync');

// 模型选项
Route::post('weiwait/options/model', [Controllers\OptionController::class, 'model'])
    ->name('weiwait.options.model');
