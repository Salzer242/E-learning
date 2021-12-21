<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Formation extends Model
{
    public function matieres()
    {
    	return $this->belongsToMany('App\Matiere');
    }

    public function fichiers()
    {
    	return $this->belongsToMany('App\FIchier');
    }

    public function demandeurs()
    {
    	return $this->belongsToMany('App\Demandeur');
    }

    public function formateurs()
    {
    	return $this->belongsToMany('App\Formateur');
    }
}
