<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarrosselItem extends Model
{
    public function scopeAtivo($query, $flag = true)
    {
        return static::where('ativo', $flag);
    }

    public function artigo()
    {
        return $this->hasMany(Artigo::class, 'id', 'artigo_id');
    }

    public function imagem()
    {
        return $this->hasMany(Objeto::class, 'id', 'imagem_id');
    }

    public static function withRels($amount = 5)
    {
        return static::with('artigo', 'imagem')->latest()->limit($amount);
    }

}
