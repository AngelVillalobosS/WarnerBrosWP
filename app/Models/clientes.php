<?php

// Autores: Irma Mireya Castro Carranza y Angel Gabriel Villalobos Saucedo
// Este modelo maneja la tabla 'clientes' y define los atributos que pueden ser llenados
// de forma masiva, como 'id_cliente', 'nombre_cliente', 'ap_cliente', 'am_cliente', 
// 'telefono' y 'correo'.
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $table = 'clientes'; // Especifica el nombre de la tabla
    protected $primaryKey = 'id_cliente'; // Clave primaria

    protected $fillable = [
        'id_cliente',
        'nombre_cliente',
        'ap_cliente',
        'am_cliente',
        'telefono',
        'correo'
        
    ];

}