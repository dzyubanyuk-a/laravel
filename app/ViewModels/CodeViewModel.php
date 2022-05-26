<?php

namespace App\ViewModels;

use App\Http\Requests\CreateCodeRequest;
use App\Models\Code;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;

class CodeViewModel
{
    public static function getLanguages()
    {
        return DB::table('languages')->get();
    }

    public static function getActivities()
    {
        return DB::table('activities')->get();
    }

    public static function getAccesses()
    {
        return DB::table('accesses')->get();
    }

    public static function createCode(CreateCodeRequest $request)
    {

        $role= new Code();
        $role->title = $request->get('title');
        $role->code = $request->get('code');
        $role->id_language = $request->get('language');
        $role->id_activity = $request->get('activity');
        $role->id_access = $request->get('access');
        $role->id_user = Auth::check() ? Auth::id() : 0;
        $role->token = Str::random(40);
        $role->save();

    }

    public static function getCodes()
    {

        return $x = DB::table('codes')->join('activities', 'codes.id_activity', '=', 'activities.id')
            ->select( 'codes.*', 'activities.*')
            ->where('codes.id_access', '=',1)->whereRaw('NOW() <= DATE_ADD(created_at, INTERVAL activity MINUTE)')
            ->limit(10)->orderBy('codes.id', 'desc')->get();



    }

    public static function show($token)
    {
        return DB::table('codes')->join('languages', 'codes.id_language', '=', 'languages.id')
            ->select( 'codes.*', 'languages.*')->where('token', $token)->get();



    }

    public static function getCodesUser()
    {
        return DB::table('codes')->join('activities', 'codes.id_activity', '=',
            'activities.id')->select( 'codes.*', 'activities.*')
            ->where('id_user', '=', Auth::id())
            ->whereRaw('NOW() <= DATE_ADD(created_at, INTERVAL activity MINUTE)')
            ->limit(10)->orderBy('codes.id', 'desc')->orderBy('created_at', 'desc')->get();
    }

    public static function showlist()
    {
        return DB::table('codes')->join('activities', 'codes.id_activity', '=',
            'activities.id')->select( 'codes.*', 'activities.*')
            ->where('id_user', '=', Auth::id())->whereRaw('NOW() <= DATE_ADD(created_at, INTERVAL activity MINUTE)')->orderBy('created_at', 'desc')->simplePaginate(10);

    }




}
