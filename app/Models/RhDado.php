<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function escolaridade()
    {
        return $this->belongsTo(Escolaridade::class);
    }

    public static function getListaAniversariantes()
    {
        $result = [];
        $viewData = DB::table('view_aniversariantes')->pluck('usuario_id');

        foreach ($viewData as $usuario) {
            array_push($result, Usuario::find($usuario));
        }

        return $result;
    }
}
