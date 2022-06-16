<?php

namespace App\services\Paste;

use App\Models\Paste;
use Auth;

class PastesGetService
{
        public function getlist(): \Illuminate\Contracts\Pagination\Paginator
        {
            return  Paste::query()
                ->where('user_id', '=', Auth::id())
                ->whereRaw('NOW()<=lifetime OR (lifetime = created_at)' )
                ->orderBy('pastes.created_at', 'desc')
                ->simplePaginate(10);
        }

        public function getPastesPublic(): \Illuminate\Database\Eloquent\Collection|array
        {
            return Paste::query()
                ->where('pastes.access_id', '=', '1')
                ->whereRaw('NOW()<=lifetime OR (lifetime = created_at)' )
                ->limit(10)
                ->orderBy('pastes.id', 'desc')
                ->get();
        }

        public function getPastesUser(): \Illuminate\Database\Eloquent\Collection|array
        {
            return Paste::query()
                ->where('user_id', '=', Auth::id())
                ->whereRaw('NOW()<=lifetime OR (lifetime = created_at)' )
                ->limit(10)
                ->orderBy('pastes.id', 'desc')
                ->get();
        }
}
