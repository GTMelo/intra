<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArtigoContent extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'artigo_id';

    protected $guarded = [];
}
