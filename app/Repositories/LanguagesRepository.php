<?php

namespace App\Repositories;

use App\Models\Language;
use App\Models\Paste;
use App\Repositories\Interfaces\LanguagesInterface;
use Prettus\Repository\Eloquent\BaseRepository;

class LanguagesRepository extends BaseRepository implements LanguagesInterface
{

    function model(): string
    {
        return Language::class;
    }
    public function getLanguages()
    {
        $model = $this->makeModel();

        return $model
            ->query()
            ->select('*')
            ->get();
    }
}
