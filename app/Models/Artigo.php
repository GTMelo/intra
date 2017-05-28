<?php

namespace App\Models;

use App\Models\Interfaces\UrlInterface;
use App\Models\Scopes\AtivoScope;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model implements UrlInterface
{

    protected static function boot()
    {
        static::addGlobalScope(new AtivoScope());
        parent::boot();
    }

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

    public function unidade()
    {
        return $this->belongsTo(Unidade::class);
    }

    public function scopeTipo($query, $tipo)
    {
        return Artigo::where('artigo_tipo_id', ArtigoTipo::tipo($tipo)->first());
    }

    public function scopeUrl($query)
    {
        return $this->artigo_tipo->internal_code . '/' . $this->id;
    }

    public function scopeInativo($query)
    {
        return $this->withoutGlobalScope(AtivoScope::class)->where('ativo', 0);
    }
}
