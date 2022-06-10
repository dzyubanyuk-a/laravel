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

        $paste = new Paste();
        $paste->title = $request->get('title');
        $paste->paste = $request->get('paste');
        $paste->language_id = $request->get('language');
        $paste->activity_id = $request->get('activity');
        $paste->access_id = $request->get('access');
        $paste->user_id = Auth::check() ? Auth::id() : 0;
        $paste->token = Str::random(40);
        $paste->save();

    }
}
