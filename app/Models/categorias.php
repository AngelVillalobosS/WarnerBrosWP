<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $table = 'categorias'; // Especifica el nombre de la tabla
    protected $primaryKey = 'id_categoria'; // Clave primaria

    protected $fillable = [
        'id_categoria',
        'nom_categoria'
        
    ];

}
