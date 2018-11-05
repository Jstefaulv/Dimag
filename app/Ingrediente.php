<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $ingrediente
 * @property string $created_at
 * @property string $updated_at
 */
class Ingrediente extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Ingredientes';

    /**
     * @var array
     */
    protected $fillable = ['ingrediente', 'created_at', 'updated_at'];

}
