<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Factory::create();

        User::truncate();

        foreach(range(1, 10) as $i) {
        	User::create([
        		'name' => $faker->name,
        		'email' => $faker->email,
        		'password' => bcrypt('123456'),
        		'remember_token' => str_random(60)
        	]);
        }
    }
}
