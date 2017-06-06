<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $table = "formation";

	public $timestamps = false;
	
    protected $fillable = [
      'label', 'description'
    ];

	
	// Une formation a plusieurs sessions.
    public function sessions() {
        return $this->hasMany('App\Models\Session', 'formation_id', 'id');
    }
	
	
	 // Nombre de places pour une formation
    public function totalPlaces()
    {
        $nb=0;
		foreach ($formation as $form){
			foreach ($form->sessions as $session){
				$nb += $session->number_of_place;
			}
		}
        return $nb;
    }
	
	
}
