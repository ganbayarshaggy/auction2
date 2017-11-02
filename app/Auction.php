<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;


class Auction extends Pivot{
    

    public function bidder(){
    	return $this->belongsToMany('App\Bidder');
    }
}
