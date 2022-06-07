<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\ViewModels\CodeViewModel;
use App\ViewModels\PasteGetViewModel;

class PasteGetController extends Controller
{
    public function show($token)
    {
        return view('paste', ['paste'=>PasteGetViewModel::show($token)]);
    }

    public function getlist()
    {
        return view('list', ['pastes'=>PasteGetViewModel::showlist()]);
    }
}
