<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquileres extends Model
{
    use HasFactory;

    protected $table = 'alquileres'; // Especifica el nombre de la tabla
    protected $primaryKey = 'id_alquiler'; // Clave primaria

    protected $fillable = [
        'id_alquiler',
        'id_cliente',
        'total',
        'fecha_inicio',
        'fecha_fin'
        
    ];

}