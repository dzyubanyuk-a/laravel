<?php

namespace Database\Seeders;

use App\Domain\Enums\Activities\Activities;
use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = Activities::cases();

        foreach ($activities as $activity) {
            Activity::updateOrCreate([
                'activity'=>$activity,
            ]);
        }

    }
}
