<?php

namespace App\ViewModels;


use App\Http\Middleware\RedirectIfAuthenticated;
use App\Models\Paste;
use Illuminate\Support\Facades\Auth;

class PasteGetViewModel
{
    public static function getPastes()
    {
        return Paste::select( 'pastes.*', 'activities.*')->join('activities', 'pastes.activity_id', '=', 'activities.id')
            ->where('pastes.access_id', '=',1)->whereRaw('(NOW() <= DATE_ADD(created_at, INTERVAL activity MINUTE)) OR (activities.activity =0)')
            ->limit(10)->orderBy('pastes.id', 'desc')->get();
    }

    public static function getPastesUser()
    {
        return Paste::select( 'pastes.*', 'activities.*')->join('activities', 'pastes.activity_id', '=', 'activities.id')
            ->where('user_id', '=', Auth::id())
            ->whereRaw('(NOW() <= DATE_ADD(created_at, INTERVAL activity MINUTE)) OR (activities.activity =0)')
            ->limit(10)->orderBy('pastes.id', 'desc')->orderBy('created_at', 'desc')->get();
    }

    public static function showlist()
    {
        return  Paste::select( 'pastes.*', 'activities.*')->join('activities', 'pastes.activity_id', '=',
            'activities.id')->where('user_id', '=', Auth::id())
            ->whereRaw('(NOW() <= DATE_ADD(created_at, INTERVAL activity MINUTE)) OR (activities.activity =0)')
            ->orderBy('created_at', 'desc')->simplePaginate(10);

    }

    public static function show($token)
    {
        return Paste::select( 'pastes.*', 'languages.*')
            ->join('languages', 'pastes.language_id', '=', 'languages.id')
            ->where('pastes.token', $token)->get();

    }
}
