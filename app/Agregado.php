<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $agregado
 * @property string $created_at
 * @property string $updated_at
 */
class Agregado extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Agregados';

    /**
     * @var array
     */
    protected $fillable = ['agregado', 'created_at', 'updated_at'];

}
