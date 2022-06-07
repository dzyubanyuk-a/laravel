<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCodeRequest;
use App\ViewModels\PasteCreateViewModel;

class PasteCreateController extends Controller
{
    public function create(CreateCodeRequest $request)
    {
        PasteCreateViewModel::createPaste($request);

        return redirect('/');

    }
}
