<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class DireccionClientes extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey = 'idDireccion_c';
    Protected $fillable =['idDireccion_c','idest','idmun','Colonia_C','Calle_C','Numero_C','CodigoPostal_C','Referencia','idclis'];
}
