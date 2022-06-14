<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;


class PastesGetController extends BaseController
{
    public function getlist()
    {
        $pastes = $this->PastesGetService->getlist();

        return view('list', [
            'pastes'=>$pastes
        ]);
    }
}
