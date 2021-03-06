<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role() /*funcion que conecta la tabla usuarios con la tabla roles*/
    {
        return $this->belongsTo(Role::class);//por paramentro se entrega el modelo al que pertenece en este caso Role
    }

    public function datos()
    {
        return $this->hasOne(DatosUsuario::class);
    }


    public function hasRoles(array $roles)
    {
        foreach ($roles as $role)
        {
            if ($this->role->name === $role) //this se refiere al usuario porque se encuentra en la clase (bd) usuario 
            {
                return true;
            }
            
        }

        return false;
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
