<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
/**
 * @property int $id
 * @property int $capacidad
 * @property string $estado
 * @property int $cantidad
 * @property int $idSector
 * @property int $idTipoMesa
 * @property string $created_at
 * @property string $updated_at
 * @property Sectore $sectore
 * @property TipoMesa $tipoMesa
 * @property Pedido[] $pedidos
 */
class Mesa extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['capacidad', 'estado', 'cantidad', 'idSector', 'idTipoMesa', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sectore()
    {
        return $this->belongsTo('App\Sector', 'idSector');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoMesa()
    {
        return $this->belongsTo('App\TipoMesa', 'idTipoMesa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Pedido', 'idMesa');
    }

    public function getPedidoAttribute(){
        $pedido = $this->pedidos()->where('idEstadoPedido','<>','4')->first();
        if($pedido){
            return $pedido;
        }else{
            $pedido = new Pedido();
            $pedido->idEstadoPedido = 1;
            $pedido->idUsuario = Auth::id();
            $pedido->idMesa = $this->id;
            $pedido->save();
            return $pedido;
        }
    }
}
