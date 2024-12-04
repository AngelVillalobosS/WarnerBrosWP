<?php
// Autor: Angel Gabriel Villalobos Saucedo
// Descripción: Modelo con el cual se accesa a la tabla: ventas
// Fecha de Creación:  Jueves 14, Noviembre 2024
// Ultima modificación: Miercoles 27, Noviembre 2024

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
