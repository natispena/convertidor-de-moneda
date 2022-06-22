<?php

namespace App;

use Illuminate\Database\Eloquent\Models;

class usuario extends Models
{
   // protected $primaryKey = 'id_rector';
    protected $fillable = [
        'id_usuario',
        'username',
        'password',
        'rol_id'
    ];
}
