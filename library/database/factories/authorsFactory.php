<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\authors;
use Faker\Generator as Faker;

$factory->define(authors::class, function (Faker $faker) {
    return [
        // 'author_name' => $faker->name,
        // 'author_id' => $faker->unique()->safeid,
        // 'about_author' => $faker->paragraph(3),
    ];
});
