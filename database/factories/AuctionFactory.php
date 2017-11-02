<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Auction::class, function (Faker $faker) {
    return [
        'property_id'  => function(){
			return factory(App\Property::class)->create()->id;
		},
        'invitation_id' => function () {
            return factory(App\Invitation::class)->create()->id;
        },
        'additional_note' => $faker->sentence,
        'min_price' => ($faker->randomFloat   +  1000000),
        'min_word' => $faker->sentence,
        'organizer' => $faker->creditCardType,
        'organizer_account' => $faker->creditCardNumber,
        'account_name' => $faker->word,
        'price' => ($faker->randomFloat   +  1000000),
        'percent' =>  $faker->numberBetween(50,100),
        'word' => $faker->sentence
    ];
});
