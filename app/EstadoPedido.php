<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $EstadoPedido
 * @property string $created_at
 * @property string $updated_at
 */
class EstadoPedido extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Estado_pedidos';

    /**
     * @var array
     */
    protected $fillable = ['EstadoPedido', 'created_at', 'updated_at'];

}
