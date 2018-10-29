<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombreProducto
 * @property int $precioProducto
 * @property string $RecetaProducto
 * @property int $idSubFamilia
 * @property string $created_at
 * @property string $updated_at
 * @property SubFamilia $subFamilia
 */
class Producto extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nombreProducto', 'precioProducto', 'RecetaProducto', 'idSubFamilia', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subFamilia()
    {
        return $this->belongsTo('App\SubFamilia', 'idSubFamilia');
    }
}
