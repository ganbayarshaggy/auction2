<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model
{
    
    public function invitation(){
    	return $this->belongsTo('App\Invitation');
    }
}
