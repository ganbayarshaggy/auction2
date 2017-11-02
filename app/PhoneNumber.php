<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    protected $table = 'phone_numbers';

    protected $fillable = [
        'phone_number', 'type'
    ];

    public function invitation(){

    	return $this->belongsTo('App\Invitation');
    }
}
