<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RhDado extends Model
{
    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }
}
