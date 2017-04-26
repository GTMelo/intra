<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserDatum
 */
class UserDatum extends Model
{
    protected $table = 'user_data';

    public $timestamps = true;

    protected $fillable = [
        'nome_completo',
        'nome_curto',
        'cpf',
        'data_nascimento',
        'status'
    ];

    protected $guarded = [];

        
}