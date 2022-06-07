<?php

namespace App\ViewModels;

use App\Models\Access;
use App\Models\Activity;
use App\Models\Language;

class PasteOptionsViewModel
{
    public static function getLanguages()
    {
        return Language::all();
    }

    public static function getActivities()
    {
        return Activity::all();
    }

    public static function getAccesses()
    {
        return Access::all();
    }
}
