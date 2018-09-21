<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6),
        'body' => $faker->paragraph(2),
        'created_at' => $faker->dateTimeBetween('-6 months', '-3 months'),
        'updated_at' => $faker->dateTimeBetween('-2 months', 'now'),
    ];
});
