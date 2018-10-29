<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $idMesa
 * @property int $idUsuario
 * @property int $idEstadoPedido
 * @property string $created_at
 * @property string $updated_at
 * @property EstadoPedido $estadoPedido
 * @property Mesa $mesa
 * @property User $user
 * @property DetallePedido[] $detallePedidos
 */
class Pedido extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['idMesa', 'idUsuario', 'idEstadoPedido', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estadoPedido()
    {
        return $this->belongsTo('App\EstadoPedido', 'idEstadoPedido');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mesa()
    {
        return $this->belongsTo('App\Mesa', 'idMesa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'idUsuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallePedidos()
    {
        return $this->hasMany('App\DetallePedido', 'idPedido');
    }
}
