<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eluser extends Model
{
    protected $fillable = [
        'nombre','email','password','profession_id',
    ];
}
