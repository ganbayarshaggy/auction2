<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Address::class, function (Faker $faker) {
    return [
        'name' => $faker->address
    ];
});
