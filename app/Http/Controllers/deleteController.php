<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\clientes;
use Illuminate\Support\Facades\DB;

class deleteController extends Controller
{
    public function deleteClienteView()
    {
        $clientes = clientes::orderby('id_cliente', 'asc')->get();
        return view('Catalogos.Clientes.eliminarClientes')
            ->with('clientes', $clientes);
    }

    public function deleteClient(Request $request)
    {
        // Encontrar y eliminar el cliente
        // $cliente = Clientes::find($request->clientes);
        $idCliente = $request->input('clientes');
        
        $cliente = DB::table('clientes')->where('id_cliente', $idCliente)->first();

        if($cliente){
            $ventas = DB::table('ventas')->where('id_cliente', $idCliente)->count();

            if ($ventas > 0) {
                session()->flash('mensaje', "No se puede eliminar al cliente con id '{$idCliente}', porque está asociado a una venta.");
            } else {
                // Delete Client
                DB::table('categorias')->where('id_cliente', $idCliente)->delete();
                //Success Messagge
                session()->flash('mensaje', 'El Cliente fue eliminado correctamente');
            }
        } else {
            session()->flash('mensaje', 'La categoria con ID '.$idCliente.' no fue encontrada');
        }

        // Redireccionar a una vista o lista
        return redirect()->route('eliminarCliente');
    }
}