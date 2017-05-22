<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['last_access'];

    public function rh_dados()
    {
        return $this->hasOne(RhDado::class, 'usuario_id', 'id');
    }
}
