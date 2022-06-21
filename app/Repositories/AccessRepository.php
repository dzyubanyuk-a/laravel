<?php

namespace App\Repositories;

use App\Models\Access;
use App\Models\Activity;
use App\Models\Language;
use App\Models\Paste;
use App\Repositories\Interfaces\AccessInterface;
use App\Repositories\Interfaces\ActivitiesInterface;
use App\Repositories\Interfaces\LanguagesInterface;
use Prettus\Repository\Eloquent\BaseRepository;

class AccessRepository extends BaseRepository implements AccessInterface
{

    function model(): string
    {
        return Access::class;
    }
    public function getAccess()
    {
        $model = $this->makeModel();

        return $model
            ->query()
            ->select('*')
            ->get();
    }
}
