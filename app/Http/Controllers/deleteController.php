<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deleteController extends Controller
{
    public function deleteClienteView(){
        return view('Catalogos.Clientes.eliminarClientes');
    }
}
