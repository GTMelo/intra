<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cargo
 */
class Cargo extends Model
{
    protected $table = 'cargos';

    public $timestamps = false;

    protected $fillable = [
        'descricao'
    ];

    protected $guarded = [];

        
}