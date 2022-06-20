<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\Repositories\PastesRepository;
use App\services\Paste\PasteGetService;
use App\services\Paste\PastesGetService;
use Prettus\Repository\Exceptions\RepositoryException;

class PasteGetController extends Controller
{
    protected PastesRepository $pastes;

    public function __construct(PastesRepository $pastes)
    {
        $this->pastes = $pastes;
    }

    /**
     * @throws RepositoryException
     */
    public function show($token): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        {
            $data = $this->show($token);

            return view('paste', $data);
        }
    }
}
