<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\clientes;

class consultController extends Controller
{
    // Regresar Vistas
    public function consultClientView(Request $request)
    {
        $lastId = \DB::select("SELECT id_cliente + 1 AS icCli FROM clientes ORDER BY id_cliente DESC LIMIT 1");
        // $cliente = Clientes::find($request->id_cliente);
        $nombre = Clientes::find($request->nombre);
        return view('Catalogos.Clientes.consultarCliente') 
            ->with('nombre_cliente', $nombre)
            ->with('nextId', $lastId);
    }

    public function consultCategorieView()
    {
        //
    }

    public function consultProductView()
    {
        //
    }

    // Controlador de funcionalidad
    public function consultClient()
    {
        //
    }

    public function consultCategorie()
    {
        //
    }

    public function consultProduct()
    {
        //
    }
}
