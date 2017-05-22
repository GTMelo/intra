<?php

namespace App\Models;

use App\Models\Interfaces\UrlInterface;
use Illuminate\Database\Eloquent\Model;

class CarrosselItem extends Model implements UrlInterface
{
    public function scopeAtivo($query, $flag = true)
    {
        return static::where('ativo', $flag);
    }

    public function artigo()
    {
        return $this->hasOne(Artigo::class, 'id', 'artigo_id');
    }

    public function imagem()
    {
        return $this->hasOne(Objeto::class, 'id', 'imagem_id');
    }

    public function scopeWithAll($query)
    {
        return $this->with('artigo', 'imagem');
    }

    public static function getItems($numberOfItems = 5)
    {
        return static::withAll()->latest()->limit($numberOfItems);
    }

    public function scopeUrl($query)
    {
        return $this->artigo->tipo_artigo->descricao . '/' . $this->artigo->id;
    }
}
