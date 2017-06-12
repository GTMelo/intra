<?php

namespace App\Models;

use App\Models\Interfaces\UrlInterface;
use App\Models\Scopes\AtivoScope;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model implements UrlInterface
{

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected static function boot()
    {

        static::addGlobalScope(new AtivoScope());
        parent::boot();

    }

    public function autor()
    {
        return $this->belongsTo(Usuario::class, 'autor_id');
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
        return Artigo::where('artigo_tipo_id', $tipo);
    }

    public function url()
    {
        return 'artigo/' . $this->id;
    }

    public function scopeInativo($query)
    {
        return $this->withoutGlobalScope(AtivoScope::class)->where('ativo', 0);
    }
}
