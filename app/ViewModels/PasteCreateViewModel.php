<?php

namespace App\ViewModels;

use App\Http\Requests\CreateCodeRequest;
use App\Models\Paste;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PasteCreateViewModel
{
    public static function createPaste(CreateCodeRequest $request)
    {

        $role= new Paste();
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
