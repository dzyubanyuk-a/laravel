<?php

namespace Database\Seeders;

use App\Domain\Enums\Languages\Languages;
use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = Languages::cases();

        foreach ($languages as $language) {
            Language::updateOrCreate([
                'language'=>$language->name,
            ]);
        }

    }
}
