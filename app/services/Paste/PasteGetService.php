<?php

namespace App\services\Paste;

use App\Models\Paste;
use Illuminate\Database\Eloquent\Collection;


class PasteGetService
{

    public function show($token):Collection
    {
        return Paste::query()
            ->with('language')
            ->where('pastes.token', $token)
            ->limit(1)
            ->get();
    }
}
