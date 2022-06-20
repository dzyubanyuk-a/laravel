<?php

namespace App\Repositories;

use App\Models\Paste;
use App\Repositories\Interfaces\PastesInterface;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Exceptions\RepositoryException;

class PastesRepository extends BaseRepository implements PastesInterface
{

    function model(): string
    {
        return Paste::class;
    }

    /**
     * @throws RepositoryException
     */
    public function selectPastes(): \Illuminate\Contracts\Pagination\Paginator
    {
        $model = $this->makeModel();

        return $model
                ->query()
                ->where('user_id', '=', Auth::id())
                ->whereRaw('NOW()<=lifetime OR (lifetime = created_at)' )
                ->orderBy('pastes.created_at', 'desc')
                ->simplePaginate(10);
    }



}
