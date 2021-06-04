<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'name' => $faker -> firstName,
        'model' => $faker -> lastName,
        'KW' => $faker -> numberBetween(90, 600)
    ];
});
