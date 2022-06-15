<?php

namespace App\services\Paste;

use App\Models\Access;
use App\Models\Activity;
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
    public function getActivities(): Collection
    {
        $arrSecond =  Activity::all();

        foreach ($arrSecond as $key => $second){
            if($second->activity != '0') {
                $arrSecond[$key] = CarbonInterval::second($second->activity)->cascade()->forHumans();
            }else{
                $arrSecond[$key] = 'Без органичений';
            }
        }

        return $arrSecond;


    }

    public function getAccesses(): Collection
    {
        return Access::all();
    }
}
