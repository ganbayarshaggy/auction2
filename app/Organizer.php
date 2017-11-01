<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
 //       protected $table = 'organizers';



	  public function property(){
        return $this->hasMany('Property');
      }
}
