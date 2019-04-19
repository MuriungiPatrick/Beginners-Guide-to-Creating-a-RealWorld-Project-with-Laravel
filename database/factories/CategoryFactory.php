<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' =>$faker->sentence(rand(2, 3), true),
        'description' =>$faker->words(rand(2, 3), true),
        'slug' =>$faker->unique()->slug,
        'updated_at' =>now(),
        'created_at' =>now()
    ];
});
