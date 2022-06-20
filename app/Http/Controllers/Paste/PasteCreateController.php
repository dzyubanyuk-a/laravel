<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCodeRequest;
use App\Models\Paste;


class PasteCreateController extends Controller
{
    public function create(CreateCodeRequest $request)
    {
        $this->PasteCreateService->createPaste($request);

        return redirect('/');

    }
}
