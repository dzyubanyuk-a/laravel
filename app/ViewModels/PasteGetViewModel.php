<?php

namespace App\ViewModels;


use App\Models\Paste;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PasteGetViewModel
{
    public static function getPastes()
    {
        return Paste::select( 'pastes.*', 'activities.*')->join('activities', 'pastes.id_activity', '=', 'activities.id')
            ->where('pastes.id_access', '=',1)->whereRaw('(NOW() <= DATE_ADD(created_at, INTERVAL activity MINUTE)) OR (activities.activity =0)')
            ->limit(10)->orderBy('pastes.id', 'desc')->get();
    }

    public static function getPastesUser()
    {
        return Paste::select( 'pastes.*', 'activities.*')->join('activities', 'pastes.id_activity', '=', 'activities.id')
            ->where('id_user', '=', Auth::id())
            ->whereRaw('(NOW() <= DATE_ADD(created_at, INTERVAL activity MINUTE)) OR (activities.activity =0)')
            ->limit(10)->orderBy('pastes.id', 'desc')->orderBy('created_at', 'desc')->get();
    }

    public static function showlist()
    {
        return  Paste::select( 'pastes.*', 'activities.*')->join('activities', 'pastes.id_activity', '=',
            'activities.id')->where('id_user', '=', Auth::id())
            ->whereRaw('(NOW() <= DATE_ADD(created_at, INTERVAL activity MINUTE)) OR (activities.activity =0)')
            ->orderBy('created_at', 'desc')->simplePaginate(10);

    }

    public static function show($token)
    {
       // return DB::table('codes')->join('languages', 'codes.id_language', '=', 'languages.id')
         //   ->select( 'codes.*', 'languages.*')->where('token', $token)->get();


        return Paste::select( 'pastes.*', 'languages.*')
            ->join('languages', 'pastes.id_language', '=', 'languages.id')
            ->where('token', $token)->get();
    }
}
