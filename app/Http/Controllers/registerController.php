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
        return view('Catalogos.Clientes.registrarCliente');
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
    public function registerClient()
    {
        // Code of Angel
    }

    public function saveClient(Request $request)
    {
        return "Registro guardado";
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
