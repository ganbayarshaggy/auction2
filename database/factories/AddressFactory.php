<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Address::class, function (Faker $faker) {
    return [
        'name' => $faker->address,
        'type' => $faker->randomElement($array = array ('1','2','3')),
        'invitation_id' => function(){
			return factory(App\Invitation::class)->create()->id;
		}
    ];
});
