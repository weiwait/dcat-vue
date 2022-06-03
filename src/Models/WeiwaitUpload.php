<?php

namespace Weiwait\DcatVue\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class WeiwaitUpload extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function clearUnusedFiles()
    {
        self::query()->where('created_at', '<', now()->subDay())
            ->get()
            ->map(function (self $file) {
                $file->delete();
                Storage::disk($file->disk)->delete($file->name);
            });
    }
}
