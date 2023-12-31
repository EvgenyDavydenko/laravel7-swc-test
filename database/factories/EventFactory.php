<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title'         => $faker->sentence,
        'text'          => $faker->paragraph,
        'created_at' => $faker->dateTimeBetween('-1 month', 'now')
    ];
});
