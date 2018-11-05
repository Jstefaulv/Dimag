<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $mensajes
 * @property string $created_at
 * @property string $updated_at
 * @property DetallePedido[] $detallePedidos
 */
class Mensaje extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['mensajes', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallePedidos()
    {
        return $this->hasMany('App\DetallePedido', 'idMensaje');
    }
}
