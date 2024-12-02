<?php
// Autor: Angel Gabriel Villalobos Saucedo
// Descripción: Modelo con el cual se accesa a la tabla: ventas
// Fecha de Creación:  Jueves 14, Noviembre 2024
// Ultima modificación: Miercoles 27, Noviembre 2024

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    protected $table = 'ventas'; // Especifica el nombre de la tabla
    protected $primaryKey = 'id_venta'; // Clave primaria

    protected $fillable = [
        'id_venta',
        'id_cliente',
        'fecha_venta',
        'total'
        
    ];

}