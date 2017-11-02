<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Bidder::class, function (Faker $faker) {
    return [
        'last_name' => $faker->lastName,
        'first_name' => $faker->firstName,
        'register_number' => $faker->regexify('^[A-Z|Kk]{2}[0-9]{8}$'),
        'agent_name' => $faker->name,
        'agent_parent' => $faker->name,
        'agent_register' => $faker->regexify('^[A-Z|Kk]{2}[0-9]{8}$'),
        'prepayment_price' => ($faker->randomFloat   +  1000000),
        'prepayment_word' => $faker->sentence,
        'prepayment_date' => $faker->datetime(),
        'address' => $faker->address,
      	'phone_number' => $faker->numberBetween(99000000,99999999), // $faker->phoneNumber,
      	'condition_or_name' => $faker->word,
      	'approve' => $faker->randomElement($array = array ('0','1'))
        
    ];
});
