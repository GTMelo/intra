<?php

namespace App\Models;

use App\Models\Interfaces\UrlInterface;
use App\Models\Scopes\AtivoScope;
use Illuminate\Database\Eloquent\Model;

class Objeto extends Model implements UrlInterface
{

    protected $with = ['objeto_tipo'];

    protected static function boot()
    {
        static::addGlobalScope(new AtivoScope());
        parent::boot();
    }

    public function scopeTipo($query, $tipo)
    {
        return static::where('objeto_tipo_id', ObjetoTipo::idOf($tipo));
    }

    public function objeto_tipo(){
        return $this->belongsTo(ObjetoTipo::class);
    }

    public function colecoes()
    {
        return $this->belongsToMany(
            Objeto::class,
            'objeto_objeto',
            'owned_id',
            'owner_id');
    }

    public function objetos()
    {
        if($this->objeto_tipo)

        return $this->belongsToMany(
            Objeto::class,
            'objeto_objeto',
            'owner_id',
            'owned_id');
    }

    public static function ofIdentifier($identifier){


        return self::where('identifier', $identifier)->first()->get();
    }

    public function url()
    {
        $created_at = $this->created_at;
        return 'storage/' . $created_at->format('Y/m/') . $this->conteudo;
    }
}
