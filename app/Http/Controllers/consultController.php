<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class consultController extends Controller
{
    // Regresar Vistas
    public function consultClientView(){
        return view('Categorias.Clientes.consultarCliente');
    }

    public function consultCategorieView(){
        return view('Catalogos.Categorias.consultarCategoria');
    }

    public function consultProductView(){
        // 
    }

    // Controlador de funcionalidad
    public function consultClient(){
        // 
    }

    public function consultCategorie(){
        // 
    }

    public function consultProduct(){
        // 
    }
    
    
}
