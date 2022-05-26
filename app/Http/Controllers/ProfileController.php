<?php

namespace App\Http\Controllers;

use App\ViewModels\CodeViewModel;
use Illuminate\Http\Request;

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
        return view('profile',[ 'codes' => CodeViewModel::getCodes(), 'user_codes' => CodeViewModel::getCodesUser()]);

    }
}
