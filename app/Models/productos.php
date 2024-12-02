<?php

// Autores: Irma Mireya Castro Carranza y Angel Gabriel Villalobos Saucedo
// Este modelo maneja la tabla 'productos' y define los atributos que pueden ser llenados
// de forma masiva, como 'id_producto', 'id_categoria', 'nom_producto', 'cant_intventario',
// 'precio_producto' y 'precio_alquiler'.
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
