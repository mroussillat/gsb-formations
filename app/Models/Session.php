<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = "session";

    public $timestamps = false;

    protected $fillable = [
      'id', 'date', 'formation_id', 'number_of_place'
    ];
}
