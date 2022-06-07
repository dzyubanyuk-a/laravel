<?php

namespace App\Http\Controllers\Paste;

use App\ViewModels\CodeViewModel;

class PasteGetController extends \App\Http\Controllers\Controller
{
    public function show($token)
    {
        return view('code', ['code'=>CodeViewModel::show($token)]);
    }

    public function getlist()
    {
        return view('list', ['codes'=>CodeViewModel::showlist()]);
    }
}
