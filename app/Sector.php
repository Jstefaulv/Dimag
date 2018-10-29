<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombreSector
 * @property string $nivelSector
 * @property int $idLocal
 * @property string $created_at
 * @property string $updated_at
 * @property Local $local
 */
class Sector extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'sectores';

    /**
     * @var array
     */
    protected $fillable = ['nombreSector', 'nivelSector', 'idLocal', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function local()
    {
        return $this->belongsTo('App\Local', 'idLocal', 'idLocal');
    }
}
