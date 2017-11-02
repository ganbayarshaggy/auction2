<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model{
    
    protected $table = 'properties';
	
	public function invitation(){
		return $this->belongsToMany('App\Invitation','auctions')
//					->using('App\Auction')
					->withPivot('min_price', 'min_word' , 'additional_note','organizer',
						'organizer_account', 'account_name', 'price', 'percent' , 'word',
						'created_at','updated_at'
					);
	}

	public function property_photo(){
		return $this->hasMany('App\PropertyPhoto');
    }

    public function organizer(){
        return $this->belongsTo('App\Organizer');
    }
}
