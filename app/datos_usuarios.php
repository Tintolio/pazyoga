<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datos_usuarios extends Model
{
      protected $fillable = [
        'nombre', 'apellido', 'fecha_nac','sexo','nivel','telefono'
    ];
}
