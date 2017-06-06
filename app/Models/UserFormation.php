<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserFormation extends Model
{
    protected $table = "user_formation";

    protected $fillable = [
      'status','formation_id','user_id'
    ];

    public function formation() {
        return Formation::find($this->formation_id)->first();
    }

    public function user() {
        return User::find($this->user_id)->first();
    }

    public function sessions() {
        return $this->belongsToMany('App\Models\Session', 'session');
    }
}
