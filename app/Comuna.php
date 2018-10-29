<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombreComuna
 * @property int $idCiudad
 * @property string $created_at
 * @property string $updated_at
 * @property Ciudade $ciudade
 * @property Local[] $locals
 */
class Comuna extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nombreComuna', 'idCiudad', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ciudade()
    {
        return $this->belongsTo('App\Ciudade', 'idCiudad');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function locals()
    {
        return $this->hasMany('App\Local', 'idComuna');
    }
}
