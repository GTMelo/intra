<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colecao extends Model
{
    protected $table = 'colecoes';

    protected $fillable = ['label', 'ativo'];

    public function objetos(){
        return $this->belongsToMany(Objeto::class);
    }


}
