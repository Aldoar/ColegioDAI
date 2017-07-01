<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public user()
    {
    	return $this->belongsTo('App\User');
    }
}
