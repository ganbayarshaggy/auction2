<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// factory('App\User',10)->create();
    	// factory('App\Property',10)->create();
    	// factory('App\Invitation',10)->create();
    	//factory('App\Auction',10)->create();
    	//factory('App\Bidder',10)->create();
    	
        

        factory('App\Address',10)->create();        
        factory('App\Newspaper',10)->create();        
        factory('App\Newspaper',10)->create();        
        factory('App\PhoneNumber',10)->create();        
        factory('App\PropertyPhoto',10)->create();  

        factory('App\Note',10)->create();
    }
}
