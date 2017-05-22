<?php

namespace App\Models;

use App\Models\Interfaces\UrlInterface;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model implements UrlInterface
{
    protected $guarded = ['id', 'created_at', 'updated_at'];


    public function autor()
    {
        return $this->belongsTo(\App\Models\Usuario::class, 'autor_id');
    }

    public function content() {
        return $this->hasOne(ArtigoContent::class);
    }

    public function artigo_tipo()
    {
        return $this->belongsTo(ArtigoTipo::class);
    }

    public function scopeTipo($query, $tipo)
    {
        return Artigo::where('artigo_tipo', $tipo);
    }

    public function scopeUrl($query)
    {
        return $this->artigo_tipo->descricao . '/' . $this->id;
    }
}
