<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Formateur extends Model
{
    protected $guarded = 'formateurs';
    protected $fillable = [
        'specialite', 'description', 'experience', 'nombre_etude', 'niveau', 'diplome', 'created_at', 'updated_at'
    ];



    public function formations()
    {
    	return $this->belongsToMany('App\Formation');
    }
}
