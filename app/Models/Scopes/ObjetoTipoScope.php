<?php
/**
 * Created by PhpStorm.
 * User: Gustavo
 * Date: 28/05/2017
 * Time: 15:43
 */

namespace App\Models\Scopes;


use App\Models\ObjetoTipo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class ObjetoTipoScope implements Scope
{
    public $tipo;

    public function __construct($tipo)
    {
        parent::__construct();
        $this->tipo = ObjetoTipo::idOf($tipo);
    }


    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        return $builder->where('id', $this->tipo);
    }
}