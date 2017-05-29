<?php

namespace App\Models;

use App\Models\Scopes\ObjetoTipoScope;

class ObjetoLink extends Objeto
{

    protected static function boot()
    {

        self::addGlobalScope(new ObjetoTipoScope('link'));
        parent::boot();

    }

    public function scopeUrl($query)
    {
        return $this->conteudo;
    }


}
