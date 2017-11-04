<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\PropertyPhoto::class, function (Faker $faker) {
    return [
      'photo_name' => 'test.png'  ,
      'photo_description' => $faker->realText($maxNbChars = 150, $indexSize = 2),
      'property_id' => function(){
			return factory(App\Property::class)->create()->id;
		}
  ];
});
