<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Matiere extends Model
{
    public function formations()
    {
    	return $this->belongsToMany('App\Formation');
    }
}
