<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $TipoMesa
 * @property string $created_at
 * @property string $updated_at
 */
class TipoMesa extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Tipo_Mesas';

    /**
     * @var array
     */
    protected $fillable = ['TipoMesa', 'created_at', 'updated_at'];

}
