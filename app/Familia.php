<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $NombreFamilia
 * @property string $created_at
 * @property string $updated_at
 * @property SubFamilia[] $subFamilias
 */
class Familia extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['NombreFamilia', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subFamilias()
    {
        return $this->hasMany('App\SubFamilia', 'idFamilia');
    }
}
