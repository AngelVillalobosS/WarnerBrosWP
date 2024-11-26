<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;
use App\Models\devoluciones;
use App\Models\productos;

use Illuminate\Support\Facades\Session;

class registerController extends Controller
{
    // Funciones para regresar las vistas
    public function registerClientView()
    {
        $lastClient = \DB::select("SELECT id_cliente + 1 AS icCli FROM clientes ORDER BY id_cliente DESC LIMIT 1");

        //Operador ternario para evitar que el dato salga como nulo si es que no hay registros en la BD
        $nextId = !empty($lastClient) && isset($lastClient[0]->icCli) ? $lastClient[0]->icCli : 1;

        return view('Catalogos.Clientes.registrarCliente')
            ->with('nextId', $nextId);
    }

    public function registerCategorieView()
    {
        // Code of Mireya
    }

    public function registerProductView()
    {
        // Code of Bryan
    }

    public function registerRentView()
    {
        // return view('Registros.registrarAlquiler');
    }

    public function registerDevolutionView()
    {
        $clientes = clientes::orderby('id_cliente', 'asc')->get();
        $productos = productos::orderby('id_producto', 'asc')->get();

        return view('Registros.registrarDevolucion')
            ->with('clientes', $clientes)
            ->with('productos', $productos);
    }

    // Funciones para la funcionalidad
    public function saveClient(Request $request)
    {
        $clientes = new clientes;
        $clientes -> id_cliente = $request -> id_cliente;
        $clientes -> nombre_cliente = $request -> nombre_cliente;
        $clientes -> ap_cliente = $request -> ap_cliente;
        $clientes -> am_cliente = $request -> am_cliente;
        $clientes -> telefono = $request -> telefono;
        $clientes -> correo = $request -> correo;
        $clientes -> save();

        Session::flash('mensaje', 'El cliente fue registrado correctamente');

        return redirect()->route('registrarCliente');
    }

    public function saveDevolution(Request $request)
    {
        // dd($request->productos);
        $devoluciones = new devoluciones;
        $devoluciones -> id_cliente = $request -> clientes;
        $devoluciones -> id_producto = $request -> productos;
        $devoluciones -> cantidad = 1;
        $devoluciones -> motivo = $request -> motivo;
        $devoluciones -> save();
        
        Session::flash('mensaje', 'La devolución fue registrada correctamente.');

        // Redirige a la vista que quieres mostrar el mensaje
        return redirect()->route('registrarDevolucion');

    }

    public function registerCategorie()
    {
        // Code of Mireya
    }

    public function registerProduct()
    {
        // Code of Bryan
    }
}
