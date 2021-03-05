<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Clientes extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey = 'idclis';
    protected $fillable =['idclis','Nombre_c','ApellidoP_C',
        'ApellidoM_C','Telefono_C','FechaNac_C','Sexo',
        'Telefono_C','Correo_C','Contraseña_C'];
}
