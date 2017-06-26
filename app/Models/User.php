<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cpf', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['last_access'];

    public function rh()
    {
        return $this->hasOne(UsuarioRH::class, 'user_id', 'id');
    }

    public function nome(){
        return $this->rh->nome_curto;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

}
