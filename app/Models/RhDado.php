<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RhDado extends Model
{
    public $timestamps = false;

    protected $dates = ['data_nascimento'];

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }

    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }

    public function cargo(){
        return $this->belongsTo(Cargo::class);
    }

    public function escolaridade(){
        return $this->belongsTo(Escolaridade::class);
    }
}
