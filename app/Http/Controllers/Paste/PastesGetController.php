<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\services\Paste\PastesGetService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Prettus\Repository\Exceptions\RepositoryException;

class PastesGetController extends Controller
{
    private PastesGetService $PastesGetService;

    public function __construct(PastesGetService $PastesGetService)
    {
        $this->PastesGetService = $PastesGetService;
    }

    /**
     * @throws RepositoryException
     */
    public function getList(): Factory|View|Application
    {
            $data = $this->PastesGetService->getpastes();

            return view('list', ['pastes' => $data]);
    }

    /**
     * @throws RepositoryException
     */
    public function index(): Factory|View|Application
    {
            $data[] = $this->PastesGetService->getpastesPublic();
            $data[] = $this->PastesGetService->getPastesUser();
            $data[] = $this->PastesGetService->getOptionsPaste();

            return view('main', ['pastes' => $data]);
    }
}
