<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = "user";

    protected $fillable = [
      'firstname', 'surname', 'login', 'password', 'adress', 'postal_code', 'city', 'hiring_date'
    ];

    public function parent_delegates() {
        return $this->hasMany(Delegue::class, 'delegate_id');
    }

    public function child_delegates() {
        return $this->hasMany(Delegue::class);
    }

    public function formations() {
        return UserFormation::all()->where('user_id',$this->id);
        //return $this->hasMany('App\Models\UserFormation');
    }

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class, 'user_specialty');
    }

    public function name()
    {
        return $this->firstname . ' ' . $this->surname;
    }
}
