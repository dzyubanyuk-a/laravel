<?php

namespace App\Http\Controllers\Paste;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCodeRequest;
use App\services\Paste\PastesGetService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Prettus\Repository\Exceptions\RepositoryException;

class PasteController extends Controller
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

    public function show($token): Factory|View|Application
    {
        $data = $this->PastesGetService->getPaste($token);

        return view('paste', ['paste' => $data]);
    }

    /**
     * @throws RepositoryException
     */
    public function list(): Factory|View|Application
    {
        $data = $this->PastesGetService->getPastes();

        return view('list', ['pastes' => $data]);
    }

    /**
     * @throws RepositoryException
     */
    public function index(): Factory|View|Application
    {
        $data['public'] = $this->PastesGetService->getpastesPublic();
        $data['user'] = $this->PastesGetService->getPastesUser();
        $data['option'] = $this->PastesGetService->getOptionsPaste();

        return view('main', ['pastes' => $data]);
    }
}
