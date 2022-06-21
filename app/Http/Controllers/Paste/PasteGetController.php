<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\services\Paste\PastesGetService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PasteGetController extends Controller
{
    private PastesGetService $PastesGetService;

    public function __construct(PastesGetService $PastesGetService)
    {
        $this->PastesGetService = $PastesGetService;
    }

    public function show($token): Factory|View|Application
    {
            $data = $this->PastesGetService->getPaste($token);

            return view('paste', ['paste' => $data]);
    }
}
