<?php

namespace App\Repositories;

use App\Domain\DTO\PasteDTO;
use App\Http\Requests\CreateCodeRequest;
use App\Models\Paste;
use App\Repositories\Interfaces\PastesInterface;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Exceptions\RepositoryException;
use Str;


class PastesRepository extends BaseRepository implements PastesInterface
{

    function model(): string
    {
        return Paste::class;
    }

    /**
     * @throws RepositoryException
     */
    public function selectPastes(): Paginator
    {
        $model = $this->makeModel();

        return $model
                ->query()
                ->where('user_id', '=', Auth::id())
                ->whereRaw('NOW()<=lifetime OR (lifetime = created_at)' )
                ->orderBy('pastes.created_at', 'desc')
                ->simplePaginate(10);
    }

    /**
     * @throws RepositoryException
     */
    public function getPastesPublic(): Collection
    {
        $model = $this->makeModel();

        return $model
            ->query()
            ->where('pastes.access_id', '=', '1')
            ->whereRaw('NOW()<=lifetime OR (lifetime = created_at)' )
            ->limit(10)
            ->orderBy('pastes.id', 'desc')
            ->get();
    }

    /**
     * @throws RepositoryException
     */
    public function getPastesUser(): Collection
    {
        $model = $this->makeModel();

        return $model
            ->query()
            ->where('user_id', '=', Auth::id())
            ->whereRaw('NOW()<=lifetime OR (lifetime = created_at)' )
            ->limit(10)
            ->orderBy('pastes.id', 'desc')
            ->get();
    }

    public function getPaste($token): Collection
    {
        $model = $this->makeModel();

        return $model
            ->query()
            ->with('language')
            ->where('token', '=', $token)
            ->get();


    }


    /**
     * @throws RepositoryException
     */
    public function createPaste(CreateCodeRequest $request): Model
    {
        $paste = $this->makeModel();

        $paste_validate = PasteDTO::fromRequest($request);

        $paste->title = $paste_validate->title;
        $paste->paste = $paste_validate->paste;
        $paste->language_id = $paste_validate->language;
        $paste->access_id = $paste_validate->access;
        $paste->token = Str::random(40);
        $paste->user_id = Auth::check() ? Auth::id() : 0;
        $paste->lifetime = Carbon::now()->addsecond($paste_validate->activity);

        $paste->save();

        return $paste;



    }


}
