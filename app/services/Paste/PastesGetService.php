<?php

namespace App\services\Paste;

use App\Models\Paste;
use Auth;

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
            /*$Paste = Paste::query()->find(3);
            $activity = $Paste->activity;
            dd($activity->activity);*/




            return Paste::join('activities', 'pastes.activity_id', '=', 'activities.id')
                ->where('pastes.access_id', '=', '1')
                ->whereRaw('(NOW() <= DATE_ADD(pastes.created_at, INTERVAL activities.activity SECOND)) OR (activities.activity = 0)')
                ->limit(10)
                ->orderBy('pastes.id', 'desc')
                ->get();
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
