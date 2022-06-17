<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\services\Paste\PasteCreateService;
use App\services\Paste\PasteGetService;
use App\services\Paste\PasteOptionsService;
use App\services\Paste\PastesGetService;

class BaseController extends Controller
{

    protected PasteOptionsService $PasteOptionsService;
    protected PasteGetService $PasteGetService;
    protected PastesGetService $PastesGetService;
    protected PasteCreateService $PasteCreateService;

    public function __construct(
        PasteOptionsService $PasteOptionsService,
        PasteGetService     $pasteGetService,
        PastesGetService    $PastesGetListService,
        PasteCreateService $PasteCreateService
    )
    {
        $this->PasteOptionsService = $PasteOptionsService;
        $this->PasteGetService = $pasteGetService;
        $this->PastesGetService = $PastesGetListService;
        $this->PasteCreateService = $PasteCreateService;

    }


}
