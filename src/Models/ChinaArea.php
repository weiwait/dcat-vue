<?php

namespace Weiwait\DcatVue\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;

class ChinaArea extends Model
{
    use HasDateTimeFormatter;

    public static function provinces()
    {
        return self::query()->where('level', 1)->get(['code as value', 'name as label', 'pcode']);
    }

    public static function cities()
    {
        return self::query()->where('level', 2)->get(['code as value', 'name as label', 'pcode']);
    }

    public static function districts()
    {
        return self::query()->where('level', 3)->get(['code as value', 'name as label', 'pcode']);
    }
}
