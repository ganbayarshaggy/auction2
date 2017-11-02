<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;


class Auction extends Pivot{
    
    protected $table = 'auctions';
//	protected $fillable = ['min_price','min_word'];

    public function bidder(){
    	return $this->belongsToMany('App\Bidder');
    }
}
