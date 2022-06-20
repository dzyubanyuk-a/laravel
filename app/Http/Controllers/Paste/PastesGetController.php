<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\Repositories\PastesRepository;
use Prettus\Repository\Exceptions\RepositoryException;

class PastesGetController extends Controller
{
    private PastesRepository $PastesGetService;

    public function __construct(PastesRepository $PastesGetService)
    {
        $this->PastesGetService = $PastesGetService;
    }

    /**
     * @throws RepositoryException
     */
    public function getlist()
    {
        {
            $data = $this->PastesGetService->selectPastes();

            return view('list', ['pastes' => $data]);
        }
    }
}
