<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ObjetoTipo extends Model
{

    protected $table = 'objeto_tipos';

    protected $fillable = ['descricao', 'icone'];

    public static function idOf($tipo)
    {
        return ObjetoTipo::where('descricao', $tipo)->first()->id;
    }
}
