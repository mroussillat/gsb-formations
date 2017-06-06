<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    protected $table = "visiteur";

    public $timestamps = false;

    protected $fillable = [
      'nom', 'prenom', 'login', 'mdp', 'adresse', 'cp', 'ville', 'dateEmbauche'
    ];

    public function isDelegate() {
        return Delegue::where('idVisiteur','=',$this->id)->first() != null;
    }

    public function isManager() {
        return Responsable::where('idResponsable','=',$this->id)->first() != null;
    }

    public function specialite()
    {
        return $this->belongsToMany('App\Models\Specialitie', 'convenir');
    }
}
