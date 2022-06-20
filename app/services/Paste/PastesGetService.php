<?php

namespace App\services\Paste;

use App\Models\Paste;
use App\Repositories\PastesRepository;
use Auth;
use Prettus\Repository\Exceptions\RepositoryException;

class PastesGetService
{

    protected PastesRepository $pastes;

    public function __construct(PastesRepository $pastes)
    {

        $this->pastes = $pastes;
    }

    /**
     * @throws RepositoryException
     */
    public function getpastes()
    {
        return $this->pastes->selectPastes();

    }

      /*  public function getPastesPublic(): \Illuminate\Database\Eloquent\Collection|array
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
        }*/
}
