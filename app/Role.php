<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user()
    {
    	return $this->hasOne(User::class); //hasOne devuelve un objeto hasMany devuelve un array con todas las relaciones / cambiar a hasMany en caso de existir usuarios que requieran tener más de un rol
    }
}
