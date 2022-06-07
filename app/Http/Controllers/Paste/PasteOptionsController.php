<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\ViewModels\CodeViewModel;
use App\ViewModels\PasteGetViewModel;
use App\ViewModels\PasteOptionsViewModel;

class PasteOptionsController extends Controller
{
    public function index()
    {
        return view('main',['languages' =>PasteOptionsViewModel::getLanguages(),
            'activities'=>PasteOptionsViewModel::getActivities(),'accesses'=>PasteOptionsViewModel::getAccesses(),
            'codes' => PasteGetViewModel::getCodes(), 'user_codes' => CodeViewModel::getCodesUser()]);
    }
}
