<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCodeRequest;
use App\ViewModels\CodeViewModel;

class PasteCreateController extends Controller
{
    public function create(CreateCodeRequest $request)
    {
        CodeViewModel::createCode($request);
        return redirect('/');

    }
}
