<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;

class modifyController extends Controller
{
    public function modifyClientView()
    {
        $clientes = clientes::orderby('id_cliente', 'asc')->get();
        return view('Catalogos.Clientes.modificarCliente')
            ->with('clientes', $clientes);
    }

    public function modifyCategorieView()
    {
        // Code of Mireya
    }

    public function modifyProductView()
    {
        // Code of Bryan
    }
}
