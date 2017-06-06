<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    protected $table = "specialite";

    public $timestamps = false;

    protected $fillable = [
      'libelle'
    ];
}
