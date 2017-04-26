<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Telefone
 */
class Telefone extends Model
{
    protected $table = 'telefones';

    public $timestamps = false;

    protected $fillable = [
        'ddi',
        'ddd',
        'telefone'
    ];

    protected $guarded = [];

        
}