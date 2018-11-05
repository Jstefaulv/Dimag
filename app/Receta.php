<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $idProducto
 * @property int $idIngrediente
 * @property string $created_at
 * @property string $updated_at
 * @property Ingrediente $ingrediente
 * @property Producto $producto
 */
class Receta extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Recetas';

    /**
     * @var array
     */
    protected $fillable = ['idProducto', 'idIngrediente', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ingrediente()
    {
        return $this->belongsTo('App\Ingrediente', 'idIngrediente');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function producto()
    {
        return $this->belongsTo('App\Producto', 'idProducto');
    }
}
