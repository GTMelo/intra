<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtigoTipo extends Model
{
    protected $fillable = ['descricao'];

    public function artigo()
    {
        return $this->hasMany(Artigo::class);
    }

    public static function findByTipo($tipo)
    {
        return static::where('descricao', $tipo)->first()->artigo;
    }

}
