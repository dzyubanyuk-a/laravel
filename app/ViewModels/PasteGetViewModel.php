<?php

namespace App\ViewModels;

use App\Models\Code;
use App\Models\Paste;

class PasteGetViewModel
{
    public static function getCodes()
    {
        return Code::select( 'codes.*', 'activities.*')->join('activities', 'codes.id_activity', '=', 'activities.id')
            ->where('codes.id_access', '=',1)->whereRaw('(NOW() <= DATE_ADD(created_at, INTERVAL activity MINUTE)) OR (activities.activity =0)')
            ->limit(10)->orderBy('codes.id', 'desc')->get();
    }
}
