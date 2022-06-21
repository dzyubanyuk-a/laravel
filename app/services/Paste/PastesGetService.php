<?php

namespace App\services\Paste;

use App\Domain\Enums\Accesses\Accesses;
use App\Domain\Enums\Activities\Activities;
use App\Domain\Enums\Languages\Languages;
use App\Http\Requests\CreateCodeRequest;
use App\Repositories\PastesRepository;
use Carbon\CarbonInterval;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
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
    public function getPastes(): Paginator
    {
        return $this->pastes->selectPastes();
    }

    /**
     * @throws RepositoryException
     */
    public function getPastesPublic(): Collection|array
    {
        return $this->pastes->getPastesPublic();
    }

    /**
     * @throws RepositoryException
     */
    public function getPastesUser(): Collection|array
    {
        return $this->pastes->getPastesUser();
    }

    /**
     * @throws RepositoryException
     */
    public function getPaste($token): Collection|array
    {
        return $this->pastes->getPaste($token);
    }


    /**
     * @throws \Exception
     */
    public function getOptionsPaste(): array
    {
        $lang = Languages::cases();
        $access = Accesses::cases();
        $Activities =  Activities::cases();


        foreach ($Activities as $second){

            if($second->value != '0') {
                $activity[$second->value] = CarbonInterval::second($second->value)->cascade()->forHumans();
            }else{
                $activity[$second->value] = 'Без органичений';
            }
        }

        return (['lang'=>$lang, 'access'=>$access, 'act'=>$activity]);
    }

    public function createPaste(CreateCodeRequest $request): void
    {

       $this->pastes->createPaste($request);
    }
}
