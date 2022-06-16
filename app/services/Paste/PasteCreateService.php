<?php

namespace App\services\Paste;

use App\Domain\DTO\PasteDTO;
use App\Http\Requests\CreateCodeRequest;
use App\Models\Access;
use App\Models\Activity;
use App\Models\Language;
use App\Models\Paste;
use Auth;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Str;


class PasteCreateService
{

    public function createPaste(CreateCodeRequest $request)
    {
        $paste_validate = PasteDTO::fromRequest($request);

       $paste = new Paste();
        $paste->title = $paste_validate->paste;
        $paste->paste = $paste_validate->paste;
        $paste->language_id = $paste_validate->language;
        //$paste->activity_id = $paste_validate->activity;
        $paste->access_id = $paste_validate->access;
        $paste->token = Str::random(40);
        $paste->user_id = Auth::check() ? Auth::id() : 0;
        $paste->lifetime = Carbon::now()->addsecond($paste_validate->activity);

        $paste->save();

    }
}
