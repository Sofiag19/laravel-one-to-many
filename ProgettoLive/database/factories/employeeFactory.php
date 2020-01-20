<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\employee;
use Faker\Generator as Faker;

$factory->define(employee::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstName,
        'lastname' => $faker -> lastname,
        'year' => $faker -> year
    ];
});
