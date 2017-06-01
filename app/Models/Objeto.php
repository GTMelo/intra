<?php

namespace App\Models;

use App\Models\Interfaces\UrlInterface;
use App\Models\Scopes\AtivoScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

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

    public function objeto_tipo()
    {
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

    public function objetos($castItemsToChildClasses = false)
    {
        if ($castItemsToChildClasses) {
            $rel = $this->belongsToMany(
                Objeto::class,
                'objeto_objeto',
                'owner_id',
                'owned_id')->get();
            return $this->castItemsInCollection($rel);

        } else {
            return $this->belongsToMany(
                Objeto::class,
                'objeto_objeto',
                'owner_id',
                'owned_id');
        }
    }

    public static function ofIdentifier($identifier)
    {
        return self::where('identifier', $identifier)->first();
    }

    public function castTo($objetoTipo)
    {
        $classToCastTo = 'App\Models\Objeto' . ucfirst($objetoTipo);
        $result = new $classToCastTo();

        $result->id = $this->id;
        $result->objeto_tipo_id = $this->objeto_tipo_id;
        $result->identifier = $this->identifier;
        $result->descricao = $this->descricao;
        $result->conteudo = $this->conteudo;
        $result->ativo = $this->ativo;
        $result->created_at = $this->created_at;
        $result->updated_at = $this->updated_at;
        $result->deleted_at = $this->deleted_at;
        $result->objeto_tipo = $this->objeto_tipo;

        return $result;
    }

    public function castItemsInCollection($collection)
    {

        $result = new Collection([]);
        foreach ($collection as $item) {
            $result->push($item->castTo($item->objeto_tipo->descricao));
        }
        return $result;

    }

    public function url()
    {
        $created_at = $this->created_at;
        return 'storage/' . $created_at->format('Y/m/') . $this->conteudo;
    }
}
