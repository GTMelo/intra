<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];

    public static function slug($slug){
        return self::where('slug', $slug)->first();
    }

}
