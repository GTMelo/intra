<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class RhDado extends Model
{
    public $timestamps = false;

    protected $dates = ['data_nascimento'];

    protected $with = ['usuario', 'cargo', 'unidade'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function escolaridade()
    {
        return $this->belongsTo(Escolaridade::class);
    }

    /**
     * Retorna se o aniversário do usuário cai dentro das datas
     *
     * @param $rangeStart Int negativo quantos dias no passado
     * @param $rangeStop Int positivo quantos dias no futuro
     * @return boolean
     */
    public function isAniversarioInRange($rangeStart, $rangeStop)
       //TODO mover este método pra uma classe Helper. Algo como DateHelper ou coisa assim
    {

        $date = $this->data_nascimento;
        $range = [
            'start' => (new Carbon())->addDays($rangeStart),
            'end' => (new Carbon())->addDays($rangeStop)
        ];
        $loop = $range['start'];

        while ($loop->diffInDays($range['end']) != 0) {

            if ($date->isBirthday($loop)) {
                return true;
            }
            $loop->addDay();

        }

        return false;
    }

    public static function getListaAniversariantes($rangeStart, $rangeStop)
    {

        $result = [];
        $usuarios = RhDado::orderByRaw('MONTH(rh_dados.data_nascimento),DAY(rh_dados.data_nascimento)')->get();

        foreach ($usuarios as $usuario) {
            if($usuario->isAniversarioInRange($rangeStart, $rangeStop)){
                array_push($result, $usuario);
            };
        }

        return $result;

    }
}
