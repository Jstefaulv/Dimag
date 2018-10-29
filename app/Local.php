<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idLocal
 * @property string $nombreLocal
 * @property string $direccionLocal
 * @property int $idComuna
 * @property string $personaContactoLocal
 * @property int $estadoLocal
 * @property string $horarioAtencionLocal
 * @property string $created_at
 * @property string $updated_at
 * @property Comuna $comuna
 */
class Local extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idLocal';

    /**
     * @var array
     */
    protected $fillable = ['nombreLocal', 'direccionLocal', 'idComuna', 'personaContactoLocal', 'estadoLocal', 'horarioAtencionLocal', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function comuna()
    {
        return $this->belongsTo('App\Comuna', 'idComuna', 'idComuna');
    }
}
