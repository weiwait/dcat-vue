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
