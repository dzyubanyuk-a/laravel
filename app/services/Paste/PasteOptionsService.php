<?php

namespace App\services\Paste;

use App\Domain\Enums\Activities\Activities;
use App\Models\Access;
use App\Models\Language;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Collection;


class PasteOptionsService
{

    public function getLanguages(): Collection
    {
        return Language::all();
    }


    /**
     * @throws \Exception
     */
    public function getActivities(): array
    {
        $arrSecond =  Activities::cases();

        foreach ($arrSecond as $second){

            if($second->value != '0') {
                $arrTime[$second->value] = CarbonInterval::second($second->value)->cascade()->forHumans();
            }else{
                $arrTime[$second->value] = 'Без органичений';
            }
        }

        return $arrTime;
    }

    public function getAccesses(): Collection
    {
        return Access::all();
    }
}
