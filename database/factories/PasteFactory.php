<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paste>
 */
class PasteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'title' => 'Заголовок пасты №'.random_int(1,15),
             'paste' => 'Код пасты',
             'language_id' => random_int(1,3),
             'access_id' =>  random_int(1,3),
             'token' => Str::random(40),
             'user_id' => random_int(0,1),
             'created_at' => '2022-06-16 14:23:11',
             'updated_at' => '2022-06-16 14:23:11',
             'deleted_at' => NULL,
             'lifetime' => '2022-06-16 19:00:14',

        ];
    }
}
