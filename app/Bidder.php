<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bidder extends Model
{
    public function auction(){
    	return $this->belongsToMany('App\Auction');
    }
}
