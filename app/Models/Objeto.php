<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{

    public function scopeTipo($query, $tipo)
    {
        return static::where('objeto_tipo_id', ObjetoTipo::idOf($tipo));
    }

    public function scopeAtivo($query, $flag = true)
    {
        return static::where('ativo', $flag);
    }

}
