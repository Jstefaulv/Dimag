<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombreCaja
 * @property string $descripcionCaja
 * @property int $idLocal
 * @property string $created_at
 * @property string $updated_at
 * @property Local $local
 * @property Cuenta[] $cuentas
 */
class Caja extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nombreCaja', 'descripcionCaja', 'idLocal', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function local()
    {
        return $this->belongsTo('App\Local', 'idLocal');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cuentas()
    {
        return $this->hasMany('App\Cuenta', 'idCaja');
    }
}
