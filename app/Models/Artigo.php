<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{


    public function autor()
    {

        return $this->belongsTo(\App\Models\Usuario::class, 'autor_id');

    }

    public function content() {

        return $this->hasOne(ArtigoContent::class);

    }
}
