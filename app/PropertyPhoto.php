<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyPhoto extends Model
{
    protected $table = 'property_photo';


     public function property(){
        return $this->belongsTo('App\Property');
    }

}
