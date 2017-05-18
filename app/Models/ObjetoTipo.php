<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ObjetoTipo extends Model
{


    public static function findByTipo($tipo)
    {
        return ObjetoTipo::where('descricao', $tipo);
    }
}
