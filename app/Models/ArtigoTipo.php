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

    public function scopeTipo($query, $tipo)
    {
        return $this->where('internal_code', $tipo)->first();
    }

}
