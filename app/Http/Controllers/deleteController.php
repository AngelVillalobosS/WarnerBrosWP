<?php

namespace App\Http\Controllers;

class deleteController extends Controller
{
    public function deleteClienteView()
    {
        return view('Catalogos.Clientes.eliminarClientes');
    }
}
