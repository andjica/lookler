<?php

use Faker\Generator as Faker;

$factory->define(App\Portfolio::class, function (Faker $faker) {
    return [
        'company' => $faker->name,
        'description' => $faker->paragraph
    ];
});