<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * @property int $id
 * @property int $rol
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $codigo
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Role $role
 * @property Pedido[] $pedidos
 */
class User extends Authenticatable
{
    use Notifiable;
    /**
     * @var array
     */
    protected $fillable = ['rol', 'name', 'email', 'password', 'codigo', 'remember_token', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rol()
    {
        return $this->belongsTo('App\Rol', 'rol');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Pedido', 'idUsuario');
    }
}
