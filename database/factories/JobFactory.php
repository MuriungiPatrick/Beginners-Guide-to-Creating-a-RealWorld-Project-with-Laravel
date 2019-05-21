<?php

use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
    return [
        'posted_by' => rand(1, 3),
        'job_title' =>$faker->sentence(rand(5, 7)),
        'job_types' =>$faker->word(rand(5, 7)),
        'job_description' => $faker->paragraphs(rand(5, 7), true),
        'salary' =>$faker->numberBetween(500, 1270),
        'slug' =>$faker->unique()->slug,
        'category_id' =>rand(1, 6),
        'updated_by'=>rand(1, 2),
        'updated_at' =>now(),
        'created_at' =>now()
    ];
});
