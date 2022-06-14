<?php

namespace App\services\Paste;

use App\Models\Access;
use App\Models\Activity;
use App\Models\Language;
use App\Models\Paste;
use Illuminate\Database\Eloquent\Collection;


class PasteGetService
{

    public function show($token):Collection
    {
        return Paste::join('languages', 'pastes.language_id', '=', 'languages.id')
            ->where('pastes.token', $token)
            ->get(['pastes.paste','languages.language']);

    }
}