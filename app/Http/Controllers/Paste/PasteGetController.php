<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\ViewModels\PasteGetViewModel;

class PasteGetController extends BaseController
{
    public function show($token)
    {
        $paste = $this->PasteGetService->show($token);

        return view('paste', [
            'paste'=>$paste
        ]);
    }
}
