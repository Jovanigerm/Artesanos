<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $primaryKey = 'idClientes';
    protected $fillable =['idClientes','Nombre_c','ApellidoP_C',
        'ApellidoM_C','Telefono_C','FechaNac_C','Sexo',
        'Telefono_C','Correo_C','Contraseña_C'];
}
