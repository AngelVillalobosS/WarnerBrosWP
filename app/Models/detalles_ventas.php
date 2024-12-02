<?php

// Autor: Angel Gabriel Villalobos Saucedo
// Descripción: Modelo con el cual se accesa a la tabla: detalles de la venta
// Fecha de Creación:  Jueves 14, Noviembre 2024
// Ultima modificación: Miercoles 27, Noviembre 2024

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles_Ventas extends Model
{
    use HasFactory;

    protected $table = 'detalles_ventas'; // Especifica el nombre de la tabla
    protected $primaryKey = 'id_venta'; // Clave primaria

    protected $fillable = [
        'id_venta',
        'id_producto',
        'precio_unitario',
        'cant_devueltas',
        'cantidad'
        
    ];

}