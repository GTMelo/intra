<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Objeto
 */
class Objeto extends Model
{
    protected $table = 'objetos';

    public $timestamps = true;

    protected $fillable = [
        'titulo',
        'tldr',
        'status',
        'detalhes'
    ];

    protected $guarded = [];

        
}