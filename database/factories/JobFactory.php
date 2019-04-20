<?php

use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
    return [
        'freelance_id' => rand(1, 3),
        'job_title' =>$faker->sentence(rand(5, 7)),
        'job_types' =>$faker->word(rand(5, 7)),
        'job_description' => $faker->paragraphs(rand(5, 7), true),
        'hourly_rate' =>$faker->numberBetween(500, 1270),
        'slug' =>$faker->unique()->slug,
        'category_id' =>rand(1, 6),
        'published_at' =>now(),
        'updated_at' =>now(),
        'created_at' =>now()
    ];
});
