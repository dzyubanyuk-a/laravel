<?php

namespace App\services\Paste;

use App\Domain\Enums\Accesses\Accesses;
use App\Domain\Enums\Activities\Activities;
use App\Models\Access;
use App\Models\Activity;
use App\Models\Language;
use App\Models\Paste;
use Auth;
use Illuminate\Database\Eloquent\Collection;


class PastesGetService
{
        public function getlist()
    {
        return  Paste::join('activities', 'pastes.activity_id', '=', 'activities.id')
            ->where('user_id', '=', Auth::id())
            ->whereRaw('(NOW() <= DATE_ADD(pastes.created_at, INTERVAL activities.activity SECOND)) OR (activities.activity =0)')
            ->orderBy('pastes.created_at', 'desc')
            ->simplePaginate(10);



    }


    public function getPastesPublic()
    {


        return Paste::query()
            ->with('activity')
            ->whereRaw('(NOW() <= DATE_ADD(pastes.created_at, INTERVAL activities.activity SECOND)) OR (activities.activity = 0)')
            ->limit(10)
            ->orderBy('pastes.id', 'desc')
            ->get()->dd();

    }




    public function getPastesUser()
    {
        return Paste::join('activities', 'pastes.activity_id', '=', 'activities.id')
            ->where('user_id', '=', Auth::id())
            ->whereRaw('(NOW() <= DATE_ADD(pastes.created_at, INTERVAL activities.activity SECOND)) OR (activities.activity =0)')
            ->limit(10)
            ->orderBy('pastes.id', 'desc')
            ->orderBy('pastes.created_at', 'desc')
            ->get();
    }

}
