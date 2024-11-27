<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_producto';

    protected $fillable = ['id_producto', 'id_cateogoria', 'nom_producto', 'cant_inventario', 'precio_producto', 'precio_alquiler'];
}
