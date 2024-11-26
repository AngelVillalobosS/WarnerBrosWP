<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;
use DB;

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

    public function wasa(Request $request)
    {
        // dd($request->all());
        // Obtener el ID del cliente desde el formulario
        $clientesId = $request->input('clientes');

        // Validación de que se haya proporcionado un ID
        if (empty($clientesId)) {
            return redirect()->route('consultaCliente')->withErrors('Por favor, ingrese un ID de cliente válido.');
        }

        // Consultar cliente en la base de datos
        $reporte = \DB::connection('mysql')
            ->select("SELECT id_cliente, CONCAT(nombre_cliente, ' ', ap_cliente, ' ', am_cliente) AS nombre_completo, telefono, correo
                      FROM clientes 
                      WHERE id_cliente = :clientes", [
                'clientes' => $clientesId
            ]);

        // Verificar si se encontró el cliente
        if (empty($reporte)) {
            return redirect()->route('consultaCliente')->withErrors('Cliente no encontrado.');
        }

        // Si el cliente es encontrado, retornar la vista con los datos
        return view('Catalogos.Clientes.consultaCliente')
            ->with('reporte', $reporte);
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
