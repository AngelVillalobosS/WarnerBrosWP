<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;
use App\Models\devoluciones;
use App\Models\productos;
use App\Models\detalles_ventas;

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

        Session::flash('mensaje', 'El cliente se ha registrado correctamente');

        return redirect()->route('registrarCliente');
    }

    public function saveDevolution(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'id_cliente' => 'required|integer|max:11',
                'nombre' => 'required|string|max:50',
                'ap_cliente' => 'required|string|max:30',
                'am_cliente' => 'required|string|max:30',
                'telefono' => 'required|integer|max:10',
                'email' => 'required|email',
            ]);
    
            // Lógica adicional aquí
    
        } catch (\Exception $e) {
            // Captura errores inesperados y muéstralos
            dd($e->getMessage());
        }
        // dd($request->productos);
        $devoluciones = new devoluciones;
        $devoluciones -> id_cliente = $request -> clientes;
        $devoluciones -> id_producto = $request -> productos;
        $devoluciones -> cantidad = 1;
        $devoluciones -> motivo = $request -> motivo;
        $devoluciones -> save();
        
        Session::flash('success', 'La devolución fue registrada correctamente.');

        // Redirige a la vista que quieres mostrar el mensaje
        return redirect()->route('registrarDevolucion');

    }
    
    public function showDevolucionesForm($id_cliente)
    {
        // Obtener todas las ventas del cliente con sus devoluciones
        $ventas = detalles_ventas::where('id_cliente', $id_cliente)->get();

        // Retornar vista con los datos del cliente y sus ventas
        return view('devoluciones.modificar', compact('ventas', 'id_cliente'));
    }

    public function updateDevoluciones(Request $request)
    {
        // Validar los datos
        $request->validate([
            'id_venta' => 'required|exists:detalles_ventas,id_venta',
            'nueva_cantidad' => 'required|integer|min:0',
            'fecha' => 'required|date',
        ]);

        // Actualizar la cantidad devuelta
        $venta = detalles_ventas::where('id_venta', $request->id_venta)
                              ->where('id_cliente', $request->id_cliente)
                              ->where('fecha', $request->fecha)
                              ->firstOrFail();

        $venta->cantidad_devuelta = $request->nueva_cantidad;
        $venta->save();

        return redirect()->back()->with('success', 'Cantidad de devoluciones actualizada correctamente.');
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
