<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    public function property(){
    	$this->belongsToMany('App\Property');
    }

    public function address()
    {
    	$this->hasOne('App\address');
    }

    public function phone_number()
    {
    	$this->hasMany('App\PhoneNumber');
    }

    public function newspaper()
    {
    	$this->hasMany('App\Newspaper');
    }
}
