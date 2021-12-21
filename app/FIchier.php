<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class FIchier extends Model
{
    public function formations()
    {
    	return $this->belongsToMany('App\Formation');
    }
}
