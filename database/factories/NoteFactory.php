<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Note::class, function (Faker $faker) {
    return [
        'auction_id'  => function(){
			return factory(App\Auction::class)->create()->id;
		},
        'bidder_id' => function () {
            return factory(App\Bidder::class)->create()->id;
        },
        'time'  =>    $faker->numberBetween(5,60),
        'time_range'  => $faker->numberBetween(5,60)
    ];
});
