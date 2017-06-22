<?php

namespace App\Models;

use App\Models\Scopes\AtivoScope;
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
        'email', 'password', 'nome_completo', 'nome_curto', 'cpf',
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

    protected static function boot()
    {
        self::addGlobalScope(new AtivoScope());
        parent::boot();
    }

    public function rh()
    {
        return $this->hasOne(UsuarioRH::class, 'usuario_id', 'id');
    }

}
