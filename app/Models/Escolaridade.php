<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Escolaridade
 */
class Escolaridade extends Model
{
    protected $table = 'escolaridades';

    public $timestamps = false;

    protected $fillable = [
        'descricao'
    ];

    protected $guarded = [];

        
}