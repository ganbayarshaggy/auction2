<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model{
    
    protected $table = 'properties';

    

	public function property_photo(){
		return $this->hasMany('App\PropertyPhoto');
    }

    public function organizer(){
        return $this->belongsTo('App\Organizer');
    }
}
