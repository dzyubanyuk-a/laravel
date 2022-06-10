<?php

namespace App\ViewModels;

use App\Models\Paste;
use Illuminate\Support\Facades\Auth;

class PasteGetTokenViewModel
{
    public static function PasteGetToken()
    {
        return Paste::select('id','token')->where('user_id', '=', Auth::id() )->orderBy('id', 'DESC')->Limit(1)->get();



    }

}
