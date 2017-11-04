<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addreses';
    public $timestamps = false;

    
    protected $fillable = [
        'name'
    ];

	
	public function invitation()
	{
	  return $this->belongsTo('App\Invitation');
	}
}
