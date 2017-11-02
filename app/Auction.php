<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;


class Auction extends Pivot{
    
     protected $table = 'auctions';

    public function bidder(){
    	return $this->belongsToMany('App\Bidder');
    }
}
