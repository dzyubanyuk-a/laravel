<?php

namespace App\ViewModels;

use App\Http\Requests\CreateCodeRequest;
use App\Models\Code;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
}
