<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombreCiudad
 * @property string $created_at
 * @property string $updated_at
 * @property Comuna $comuna
 */
class Ciudad extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ciudades';

    /**
     * @var array
     */
    protected $fillable = ['nombreCiudad', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comuna()
    {
        return $this->hasOne('App\Comuna', 'idCiudad');
    }
}
