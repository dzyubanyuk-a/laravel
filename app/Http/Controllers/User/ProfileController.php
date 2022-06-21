<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\services\Paste\PastesGetService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Prettus\Repository\Exceptions\RepositoryException;

class ProfileController extends Controller
{


    private PastesGetService $PastesGetService;

    public function __construct( PastesGetService $pastesGetService)
    {
        $this->PastesGetService = $pastesGetService;
    }


    /**
     * @throws RepositoryException
     */
    public function index(): Factory|View|Application
    {
        {
            $data[] = $this->PastesGetService->getPastesPublic();
            $data[] = $this->PastesGetService->getPastesUser();

            return view('profile', ['pastes' => $data]);
        }
    }
}
