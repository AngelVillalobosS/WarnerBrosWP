<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\clientes;

class deleteController extends Controller
{
    public function deleteClienteView()
    {
        return view('Catalogos.Clientes.eliminarClientes');
    }
    public function deleteClient(Request $request)
    {
        // Encontrar y eliminar el cliente
        $cliente = Clientes::find($request->id_cliente);
        $cliente->delete();

        // Mensaje de éxito
        Session::flash('mensaje', 'El cliente fue eliminado correctamente.');

        // Redireccionar a una vista o lista
        return redirect()->route('eliminarCliente');
    }
}
