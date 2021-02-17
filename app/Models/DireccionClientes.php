<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DireccionClientes extends Model
{
    use HasFactory;
    protected $primaryKey = 'idDireccion_C';
    protected $fillable =['idDireccion_C','idEstado','idMunicipio',
        'Colonia_C','Calle_C','Numero_C','CodigoPostal_C','Referencia'];
}
