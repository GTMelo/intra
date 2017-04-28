<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CarrosselItem
 */
class CarrosselItem extends Model
{

    protected $table = 'carrossel_items';

    protected $incrementing = false;

    protected $primaryKey = 'objeto_id';

    public $timestamps = true;

    protected $fillable = [];

    protected $guarded = [];

    public function objeto(){

        return $this->hasOne(Objeto::class, 'objeto_id', 'objeto_id');

    }

    public function imagem(){

        return $this->hasOne(Objeto::class, 'objeto_id', 'img_ref');

    }

        
}