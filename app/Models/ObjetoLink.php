<?php

namespace App\Models;

use App\Models\Scopes\ObjetoTipoScope;

class ObjetoLink extends Objeto
{

    protected $table = 'objetos';

    protected static function boot()
    {

        self::addGlobalScope(new ObjetoTipoScope('link'));
        parent::boot();

    }

    public function url($query)
    {
        return $this->conteudo;
    }




}
