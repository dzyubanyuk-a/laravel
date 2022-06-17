<?php

namespace Database\Factories;

use App\Domain\Enums\Accesses\Accesses;
use App\Domain\Enums\Activities\Activities;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
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
        $x = Arr::random(Activities::cases());

        return [
            'title' => 'Заголовок пасты №'.random_int(1,15),
             'paste' => 'Код пасты',
             'language_id' => random_int(1,3),
             'access_id' =>  random_int(1,3),
             'token' => Str::random(40),
             'user_id' => random_int(0,1),
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
             'deleted_at' => NULL,
             'lifetime' => Carbon::now()->addSecond($x->value),

        ];
    }
}
