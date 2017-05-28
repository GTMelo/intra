<?php

namespace App\Models;

use App\Models\Interfaces\UrlInterface;
use App\Models\Scopes\AtivoScope;
use Illuminate\Database\Eloquent\Model;

class CarrosselItem extends Model implements UrlInterface
{

    protected static function boot()
    {
        static::addGlobalScope(new AtivoScope());
        parent::boot();

    }

    protected $dates = ['published_at'];

    protected $with = ['artigo', 'imagem'];

    public function artigo()
    {
        return $this->hasOne(Artigo::class, 'id', 'artigo_id');
    }

    public function imagem()
    {
        return $this->hasOne(Objeto::class, 'id', 'imagem_id');
    }

    public static function getItems($numberOfItems = 5)
    {
        return static::latest('published_at')->take($numberOfItems);
    }

    public function scopeUrl($query)
    {
        return $this->artigo->tipo_artigo->descricao . '/' . $this->artigo->id;
    }
}
