<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        //
        'posted_by' => rand(1, 6),
        'name' =>$faker->name,
        'company' =>$faker->company,
        'slug' =>$faker->unique()->slug,
        'updated_by'=>rand(1, 3),
        'updated_at' =>now(),
        'created_at' =>now()
    ];
});
