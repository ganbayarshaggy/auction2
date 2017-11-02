<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Property;
use App\PropertyPhoto;
use App\Organizer;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Property::truncate();
        PropertyPhoto::truncate();
        Organizer::truncate();

        foreach(range(1, 10) as $i) {

        	$property = Property::create([
        		'name' => $faker->sentence,
        		'source' => $faker->sentence,
        		'age' => mt_rand(4,5),
        		'technical_specification' =>  $faker->sentence,
        		'state_registration_number' =>  mt_rand(9,10),
        		'status' => $faker->sentence,
        		'other' => $faker->sentence,
        		'property_kind_json' => $faker->sentence,
        		'organizaion_id' => $faker->sentence,
        		'photo_id' => $faker->sentence,
        		
        		

        		'description' => $faker->paragraph(mt_rand(10, 20)),
        		'image' => 'test.png'
        	]);

        	foreach(range(1, mt_rand(3, 12)) as $j) {
        		RecipeIngredient::create([
        			'recipe_id' => $property->id,
        			'name' => $faker->word,
        			'qty' => mt_rand(1, 12).' Kg'
        		]);
        	}

        	foreach(range(1, mt_rand(5, 12)) as $k) {
        		RecipeDirection::create([
        			'recipe_id' => $recipe->id,
        			'description' => $faker->sentence,
        		]);
        	}
            
        }   
    }
}
