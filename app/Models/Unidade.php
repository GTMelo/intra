<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    public function unidade_superior(){

        return $this->hasOne(self::class, 'id', 'unidade_superior_id');

    }

    public function hierarquia(){

        $result = [];

        $unidade_atual = $this->unidade_superior;

        while($unidade_atual != null){

            array_unshift($result, $unidade_atual);
            $unidade_atual = $unidade_atual->unidade_superior;

        }

        return $result;

    }
}
