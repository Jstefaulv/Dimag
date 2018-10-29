<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $MontoTotal
 * @property int $idMesa
 * @property int $idTipoPago
 * @property int $idPedido
 * @property int $idCaja
 * @property boolean $propina
 * @property int $montoPropina
 * @property string $created_at
 * @property string $updated_at
 * @property Caja $caja
 * @property Mesa $mesa
 * @property Pedido $pedido
 * @property TipoPago $tipoPago
 */
class Cuenta extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['MontoTotal', 'idMesa', 'idTipoPago', 'idPedido', 'idCaja', 'propina', 'montoPropina', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function caja()
    {
        return $this->belongsTo('App\Caja', 'idCaja');
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
    public function pedido()
    {
        return $this->belongsTo('App\Pedido', 'idPedido');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoPago()
    {
        return $this->belongsTo('App\TipoPago', 'idTipoPago');
    }
}
