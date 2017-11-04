<?php

use Faker\Generator as Faker;
use App\Organizer;
use App\PropertyPhoto;
/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Property::class, function (Faker $faker) {
    return [
        'name' => $faker->catchPhrase,
        'source' => $faker->realText( 100,  2),
        'age' => $faker->year($max = 'now'),
        'technical_specification' => $faker->realText($maxNbChars = 100, $indexSize = 1),
        'state_registration_number' =>  $faker->randomNumber($nbDigits = NULL, $strict = false),
        'status' => $faker->word,
        'other' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'property_kind_json' => "{'undur':'10m','urgun':20,'busad uzuulelt':'mca'}",
		'organization_id' => function(){
			return factory(App\Organizer::class)->create()->id;
		},

    ];
});
