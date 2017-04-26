<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RhDatum
 */
class RhDatum extends Model
{
    protected $table = 'rh_data';

    public $timestamps = false;

    protected $fillable = [
        'siape',
        'sexo'
    ];

    protected $guarded = [];

        
}