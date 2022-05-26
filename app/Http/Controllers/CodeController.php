<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCodeRequest;
use App\ViewModels\CodeViewModel;
use Illuminate\Http\Request;

class CodeController extends Controller
{
    public function index()
    {
        return view('main',['languages' =>CodeViewModel::getLanguages(), 'activities'=>CodeViewModel::getActivities(),'accesses'=>CodeViewModel::getAccesses(), 'codes' => CodeViewModel::getCodes(), 'user_codes' => CodeViewModel::getCodesUser()]);
    }

    public function create(CreateCodeRequest $request)
    {
        CodeViewModel::createCode($request);
        return redirect('/');
    }

    public function show($token)
    {
        return view('code', ['code'=>CodeViewModel::show($token)]);
    }

    public function getlist()
    {
        return view('list', ['codes'=>CodeViewModel::showlist()]);
    }
}
