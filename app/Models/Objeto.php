<?php

namespace App\Models;

use App\Models\Interfaces\UrlInterface;
use Illuminate\Database\Eloquent\Model;

class Objeto extends Model implements UrlInterface
{

    public function scopeTipo($query, $tipo)
    {
        return static::where('objeto_tipo_id', ObjetoTipo::idOf($tipo));
    }

    public function scopeAtivo($query, $flag = true)
    {
        return static::where('ativo', $flag);
    }


    public function scopeUrl($query)
    {
        $created_at = $this->created_at;

        return 'storage/' . $created_at->format('Y/m/') . $this->filename;
    }
}
