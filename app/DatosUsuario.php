<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosUsuario extends Model
{


	protected $fillable = [
        'nombre', 'apellido', 'fecha_nac','sexo','telefono'
    ];

   	public function user()
    {
    	return $this->belongsTo(User::class); //hasOne devuelve un objeto hasMany devuelve un array con todas las relaciones / cambiar a hasMany en caso de existir usuarios que requieran tener más de un rol
    }
}
