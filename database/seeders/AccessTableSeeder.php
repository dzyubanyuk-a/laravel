<?php

namespace Database\Seeders;

use App\Domain\Enums\Accesses\Accesses;
use App\Models\Access;
use Illuminate\Database\Seeder;

class AccessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accesses = Accesses::cases();


        foreach ($accesses as $access) {
            Access::query()->updateOrCreate([
                'access'=>$access,
            ]);
        }

    }
}
