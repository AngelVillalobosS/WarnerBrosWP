<?php

// Autores: Irma Mireya Castro Carranza y Ángel Gabriel Villalobos Saucedo
// Este modelo maneja la tabla 'ventas' y define los atributos que pueden ser llenados
// de forma masiva, como 'id_venta', 'id_cliente', 'fecha_venta' y 'total'.
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
