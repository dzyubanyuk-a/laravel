<?php

namespace App\services\Paste;

use App\Models\Access;
use App\Models\Activity;
use App\Models\Language;
use Illuminate\Database\Eloquent\Collection;


class PasteOptionsService
{

    public function getLanguages(): Collection
    {
        return Language::all();
    }

    public function getActivities(): Collection
    {
        return Activity::all();
    }

    public function getAccesses(): Collection
    {
        return Access::all();
    }
}
