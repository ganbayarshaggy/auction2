<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyPhoto extends Model
{
    protected $table = 'property_photos';

    public $timestamps = false;

     public function property(){
        return $this->belongsTo('App\Property');
    }

}
