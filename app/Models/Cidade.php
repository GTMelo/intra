<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{

    protected $with = ['pais'];

    public function pais()
    {
        return $this->hasOne(Pais::class, 'id', 'pais_id');
    }

}
