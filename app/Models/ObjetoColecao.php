<?php

namespace App\Models;

use App\Models\Scopes\AtivoScope;
use App\Models\Scopes\ObjetoTipoScope;

class ObjetoColecao extends Objeto
{
    protected $table = 'objetos';

    protected $with = ['objetos'];

    protected static function boot()
    {
        self::addGlobalScope(new ObjetoTipoScope('colecao'));
        self::addGlobalScope(new AtivoScope());
        parent::boot();
    }

    public function url()
    {
        return 'colecao/' . $this->id;
    }

}
