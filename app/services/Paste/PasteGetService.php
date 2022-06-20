<?php

namespace App\services\Paste;

use App\Models\Paste;
use App\Repositories\PastesRepository;
use Illuminate\Database\Eloquent\Collection;


class PasteGetService
{

    public function show($token): \Illuminate\Database\Eloquent\Builder
    {
        return PastesRepository::query()
            ->selectPaste($token);
    }
}
