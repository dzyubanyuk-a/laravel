<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\ViewModels\CodeViewModel;
use App\ViewModels\PasteGetViewModel;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile',[ 'pastes' => PasteGetViewModel::getPastes(), 'user_pastes' => PasteGetViewModel::getPastesUser()]);

    }
}
