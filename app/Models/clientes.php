<?php
// Autor: Angel Gabriel Villalobos Saucedo
// Descripción: Modelo con el cual se accesa a la tabla: Clientes
// Fecha de Creación:  Jueves 14, Noviembre 2024
// Ultima modificación: Miercoles 27, Noviembre 2024
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