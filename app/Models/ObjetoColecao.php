<?php

namespace App\Models;

use App\Models\Scopes\ObjetoTipoScope;

class ObjetoColecao extends Objeto
{
    protected static function boot()
    {
        self::addGlobalScope(new ObjetoTipoScope('colecao'));
        parent::boot();
    }

}
