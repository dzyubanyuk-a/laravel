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
        $role->paste = $request->get('paste');
        $role->language_id = $request->get('language');
        $role->activity_id = $request->get('activity');
        $role->access_id = $request->get('access');
        $role->user_id = Auth::check() ? Auth::id() : 0;
        $role->token = Str::random(40);
        $role->save();

    }
}
