<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\ViewModels\CodeViewModel;

class PasteOptionsController extends Controller
{
    public function index()
    {
        return view('main',['languages' =>CodeViewModel::getLanguages(),
            'activities'=>CodeViewModel::getActivities(),'accesses'=>CodeViewModel::getAccesses(),
            'codes' => CodeViewModel::getCodes(), 'user_codes' => CodeViewModel::getCodesUser()]);
    }
}
