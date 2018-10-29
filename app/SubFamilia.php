<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $NombreSubFamilia
 * @property int $idFamilia
 * @property string $created_at
 * @property string $updated_at
 * @property Familia $familia
 * @property Producto[] $productos
 */
class SubFamilia extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['NombreSubFamilia', 'idFamilia', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function familia()
    {
        return $this->belongsTo('App\Familia', 'idFamilia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Producto', 'idSubFamilia');
    }
}
