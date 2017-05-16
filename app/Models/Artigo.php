<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function autor()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'autor_id');
    }

    public function content() {
        return $this->hasOne(ArtigoContent::class);
    }

    public function tipo_artigo()
    {
        return $this->belongsTo(TipoArtigo::class);
    }

//    public function noticia(){
//        return Artigo::where()
//    }
}
