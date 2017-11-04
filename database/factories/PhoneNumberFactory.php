<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\PhoneNumber::class, function (Faker $faker) {
    return [
        'phone_number' => $faker->numberBetween(99000000,99999999), // $faker->phoneNumber,
        'type' =>  $faker->randomElement($array = array ('1','2','3')),
        'invitation_id' => function(){
			return factory(App\Invitation::class)->create()->id;
		}
    ];
});
