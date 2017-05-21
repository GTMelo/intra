<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ObjetoTipo extends Model
{

    public static function idOf($tipo)
    {
        return ObjetoTipo::where('descricao', $tipo)->first()->id;
    }
}
