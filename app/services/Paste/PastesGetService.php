<?php

namespace App\services\Paste;

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
        return Paste::join('activities', 'pastes.activity_id', '=', 'activities.id')
            ->where('user_id', '=', Auth::id())
            ->whereRaw('(NOW() <= DATE_ADD(created_at, INTERVAL activity MINUTE)) OR (activities.activity =0)')
            ->orderBy('created_at', 'desc')
            ->simplePaginate(10);

    }


    public function getPastesPublic()
    {
        return Paste::join('activities', 'pastes.activity_id', '=', 'activities.id')
            ->where('pastes.access_id', '=',1)
            ->whereRaw('(NOW() <= DATE_ADD(created_at, INTERVAL activity MINUTE)) OR (activities.activity =0)')
            ->limit(10)
            ->orderBy('pastes.id', 'desc')
            ->get(['pastes.title', 'pastes.token']);
    }

    public function getPastesUser()
    {
        return Paste::join('activities', 'pastes.activity_id', '=', 'activities.id')
            ->where('user_id', '=', Auth::id())
            ->whereRaw('(NOW() <= DATE_ADD(created_at, INTERVAL activity MINUTE)) OR (activities.activity =0)')
            ->limit(10)
            ->orderBy('pastes.id', 'desc')
            ->orderBy('created_at', 'desc')
            ->get(['pastes.title', 'pastes.token']);
    }

}
