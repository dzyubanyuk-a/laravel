<?php

namespace App\Http\Controllers;

use App\ViewModels\CodeViewModel;
use Illuminate\Http\Request;

class CodeController extends Controller
{
    public function index()
    {
        return view('main',['languages' =>CodeViewModel::getLanguages(), 'activities'=>CodeViewModel::getActivities(),'accesses'=>CodeViewModel::getAccesses()]);
    }
}
