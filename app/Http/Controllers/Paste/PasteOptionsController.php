<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\ViewModels\PasteGetTokenViewModel;
use App\ViewModels\PasteGetViewModel;
use App\ViewModels\PasteOptionsViewModel;

class PasteOptionsController extends Controller
{
    public function index()
    {
        return view('main',['languages' =>PasteOptionsViewModel::getLanguages(),
            'activities'=>PasteOptionsViewModel::getActivities(),
            'accesses'=>PasteOptionsViewModel::getAccesses(),
            'pastes' => PasteGetViewModel::getPastes(),
            'user_pastes' => PasteGetViewModel::getPastesUser(),
        ]);
    }
}
