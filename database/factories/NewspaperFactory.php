<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Newspaper::class, function (Faker $faker) {
    return [
				'name' 		=>	$faker->word,
				'number' 	=>	$faker->randomDigit,
				'date'		=>	$faker->date,
				'invitation_id' => function(){
					return factory(App\Invitation::class)->create()->id;
				}
    		];
});
