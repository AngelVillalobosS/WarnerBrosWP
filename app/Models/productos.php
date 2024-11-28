<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table = 'productos'; // Especifica el nombre de la tabla
    protected $primaryKey = 'id_producto'; // Clave primaria

    protected $fillable = [
        'id_producto',
        'id_categoria',
        'nom_producto',
        'cant_intventario',
        'precio_producto',
        'precio_alquiler'
        
    ];

}