<?php

namespace App\services\Paste;

use App\Domain\Enums\Activities\Activities;
use App\Http\Requests\CreateCodeRequest;
use App\Repositories\AccessRepository;
use App\Repositories\ActivitiesRepository;
use App\Repositories\LanguagesRepository;
use App\Repositories\PastesRepository;
use Carbon\CarbonInterval;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Prettus\Repository\Exceptions\RepositoryException;

class PastesGetService
{

    protected PastesRepository $pastes;
    protected LanguagesRepository $languages;
    protected ActivitiesRepository $activities;
    protected AccessRepository $accesses;

    public function __construct(PastesRepository $pastes, LanguagesRepository $languages, ActivitiesRepository $activities,
    AccessRepository $accesses)
    {
        $this->pastes = $pastes;
        $this->languages = $languages;
        $this->activities = $activities;
        $this->accesses = $accesses;
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

    public function getPaste($token): Collection|array
    {
        return $this->pastes->getPaste($token);

    }


    public function getOptionsPaste()
    {
        $lang = $this->languages->getLanguages();

        $access = $this->accesses->getAccess();

        $arrSecond =  Activities::cases();

        foreach ($arrSecond as $second){

            if($second->value != '0') {
                $act[$second->value] = CarbonInterval::second($second->value)->cascade()->forHumans();
            }else{
                $act[$second->value] = 'Без органичений';
            }
        }

        return ([$lang, $act, $access]);
    }

    public function createPaste(CreateCodeRequest $request){

       $this->pastes->createPaste($request);
    }
}
