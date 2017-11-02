<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Invitation::class, function (Faker $faker) {
    return [
        'inv_name' =>   $faker->word,
        'rule_date' =>   $faker->datetime,
        'rule_number' => $faker->randomDigit,
        'intro'   =>  $faker->sentence,
        'enddate' => $faker->datetime,
        'location'  =>   $faker->address,
        'request_date'  =>   $faker->datetime,
        'request_address' => $faker->address,
        'news_webaddress' => $faker->domainName,
        'news_address' =>  $faker->address,
        'phone_number_id' => function(){
			return factory(App\PhoneNumber::class)->create()->id;
		},
        'address_id' => function(){
			return factory(App\Address::class)->create()->id;
		},
    ];
});
