<?php

// Autores: Irma Mireya Castro Carranza y Angel Gabriel Villalobos Saucedo
// Este modelo maneja la tabla 'detalles_ventas' y define los atributos que pueden ser llenados
// de forma masiva, como 'id_venta', 'id_producto', 'precio_unitario', 'cant_devueltas' y 'cantidad'.
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
