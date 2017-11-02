<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addreses';

    protected $fillable = [
        'name'
    ];

	
	public function invitation()
	{
	  return $this->belongsTo('App\Invitation');
	}
}
