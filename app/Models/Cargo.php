<?php

namespace App\Models;

use App\Models\Scopes\AtivoScope;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected static function boot()
    {
        static::addGlobalScope(new AtivoScope());
        parent::boot(); // TODO: Change the autogenerated stub

    }


}
