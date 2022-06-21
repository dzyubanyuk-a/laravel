<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCodeRequest;
use App\services\Paste\PastesGetService;
use Illuminate\Http\RedirectResponse;


class PasteCreateController extends Controller
{
    private PastesGetService $PastesGetService;

    public function __construct(PastesGetService $PastesGetService)
    {
        $this->PastesGetService = $PastesGetService;
    }

    public function create(CreateCodeRequest $request): RedirectResponse
    {
        $this->PastesGetService->createPaste($request);

        return redirect()->route('index');
    }
}
