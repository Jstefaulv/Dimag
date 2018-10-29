<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $TipoPago
 * @property string $created_at
 * @property string $updated_at
 * @property Cuenta[] $cuentas
 */
class TipoPago extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['TipoPago', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cuentas()
    {
        return $this->hasMany('App\Cuenta', 'idTipoPago');
    }
}
