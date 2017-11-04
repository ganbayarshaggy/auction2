<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model
{
    public $timestamps = false;
    
    public function invitation(){
    	return $this->belongsTo('App\Invitation');
    }
}
