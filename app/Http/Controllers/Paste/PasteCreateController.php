<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCodeRequest;


class PasteCreateController extends BaseController
{
    public function create(CreateCodeRequest $request)
    {
        $this->PasteCreateService->createPaste($request);

        return redirect('/');

    }
}
