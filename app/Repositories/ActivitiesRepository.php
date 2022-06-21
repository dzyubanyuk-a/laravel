<?php

namespace App\Repositories;

use App\Models\Access;
use App\Models\Activity;
use App\Models\Language;
use App\Models\Paste;
use App\Repositories\Interfaces\ActivitiesInterface;
use App\Repositories\Interfaces\LanguagesInterface;
use Prettus\Repository\Eloquent\BaseRepository;

class ActivitiesRepository extends BaseRepository implements ActivitiesInterface
{

    function model(): string
    {
        return Activity::class;
    }
    public function getActivities()
    {
        $model = $this->makeModel();

        return $model
            ->query()
            ->select('*')
            ->get();
    }
}
