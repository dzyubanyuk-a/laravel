<?php

namespace Database\Seeders;

use App\Models\Paste;
use Illuminate\Database\Seeder;


class PastesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
         Paste::factory(100)->create();

    }
}
