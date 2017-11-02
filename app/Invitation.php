<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    public function property(){
    	return $this->belongsToMany('App\Property','auctions')
                    ->withPivot('min_price', 'min_word' , 'additional_note','organizer',
                        'organizer_account', 'account_name', 'price', 'percent' , 'word',
                        'created_at','updated_at'
                    );;
    }

    public function address()
    {
    	return $this->hasOne('App\address');
    }

    public function phone_number()
    {
    	return $this->hasMany('App\PhoneNumber');
    }

    public function newspaper()
    {
    	return $this->hasMany('App\Newspaper');
    }
}
