<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{


    public function user()
    {

        return $this->belongsTo(\App\Models\Usuario::class, 'autor_id');

    }
}
