<?php

use Faker\Generator as Faker;

$factory->define(App\Education::class, function (Faker $faker) {
    return [
        'school' => $faker->name,
        'description' => $faker->paragraph
    ];
});