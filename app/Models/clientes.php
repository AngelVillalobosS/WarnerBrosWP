<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_cliente';

    protected $fillable = ['id_cliente', 'nombre_cliente', 'ap_cliente', 'am_cliente', 'telefono', 'correo'];
}
