<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $Observacion
 * @property int $idProducto
 * @property int $idPedido
 * @property string $created_at
 * @property string $updated_at
 * @property Pedido $pedido
 * @property Producto $producto
 */
class DetallePedido extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Detalle_pedidos';

    /**
     * @var array
     */
    protected $fillable = ['Observacion', 'idProducto', 'idPedido', 'created_at', 'updated_at'];

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
    public function producto()
    {
        return $this->belongsTo('App\Producto', 'idProducto');
    }
}
