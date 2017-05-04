<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder;

abstract class BaseModel extends Model
{

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('status', function (Builder $builder) {
            $builder->where('status', '=', 1);
        });
    }

}
