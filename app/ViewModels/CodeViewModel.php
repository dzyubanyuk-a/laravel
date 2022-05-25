<?php

namespace App\ViewModels;

use Illuminate\Support\Facades\DB;

class CodeViewModel
{
    public static function getLanguages()
    {
        return DB::table('languages')->get();
    }

    public static function getActivities()
    {
        return DB::table('activities')->get();
    }

    public static function getAccesses()
    {
        return DB::table('accesses')->get();
    }
}
