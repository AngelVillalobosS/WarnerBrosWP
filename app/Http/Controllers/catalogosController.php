<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catalogosController extends Controller
{
    public function catClientesView(){
        return view('Catalogos.Clientes.clientes');
    }

    public function catCategoriasView(){
        // Code of Mireya
    }
    
    public function catProductosView(){
        // Code of Bryan
    }
}