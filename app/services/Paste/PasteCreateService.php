<?php

namespace App\services\Paste;

use App\Http\Requests\CreateCodeRequest;
use App\Models\Access;
use App\Models\Activity;
use App\Models\Language;
use App\Models\Paste;
use Auth;
use Illuminate\Database\Eloquent\Collection;
use Str;


class PasteCreateService
{

    public function createPaste(CreateCodeRequest $request)
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
