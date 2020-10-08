<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model\Admin::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'pwd' => \Illuminate\Support\Str::random(5), // password
        'gender' => $faker->randomElement(['man','woman']),
        'score' => mt_rand(10,100)
    ];
});
