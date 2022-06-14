<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Paste\BaseController;


class ProfileController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }
   */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pastesPublic = $this->PastesGetService->getPastesPublic();
        $pastesUser = $this->PastesGetService->getPastesUser();


        return view('profile',[
            'pastes' => $pastesPublic,
            'user_pastes' => $pastesUser]);

    }
}
