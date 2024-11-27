<?php

namespace App\Http\Controllers;

class catalogosController extends Controller
{
    public function catClientesView()
    {
        return view('Catalogos.Clientes.clientes');
    }

    public function catCategoriasView(){
        return view('Catalogos.Categorias.categorias');
    }

    public function catProductosView()
    {
        // Code of Bryan
    }
}
