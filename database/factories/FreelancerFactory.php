<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Freelancer::class, function (Faker $faker) {
    return [
        //
        'posted_by' => rand(1, 5),
        'first_name' =>$faker->firstname,
        'last_name' =>$faker->lastName,
        'preferred_salary' =>$faker->numberBetween(500, 1270),
        'slug' =>$faker->unique()->slug,
        'updated_by'=>rand(1, 3),
        'updated_at' =>now(),
        'created_at' =>now()
    ];
});
