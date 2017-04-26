<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ObjetoTipo
 */
class ObjetoTipo extends Model
{
    protected $table = 'objeto_tipos';

    public $timestamps = false;

    protected $fillable = [
        'descricao',
        'icone'
    ];

    protected $guarded = [];

        
}