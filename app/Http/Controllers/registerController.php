<?php

namespace App\Http\Controllers;
use App\Models\Categorias;
use App\Models\Productos;
use App\Models\Clientes;
use App\Models\Ventas;
use App\Models\Detalles_Ventas;
use Illuminate\Http\Request;
use App\Models\devoluciones;

use Illuminate\Support\Facades\Session;
// Autores: Irma Mireya Castro Carranza y Ángel Gabriel Villalobos Saucedo
// Este controlador gestiona las vistas de los modulos y las funcionalidades para registrar en sus respectivas tablas

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
        $idultimocategoria = \DB::select("SELECT id_categoria + 1 as nuevaclave FROM 
        categorias ORDER BY id_categoria DESC LIMIT 1");
        $sigue = !empty($idultimocategoria) ? $idultimocategoria[0]->nuevaclave : 1;
        return view('Catalogos.Categorias.registrarCategoria')->with('sigue',$sigue);
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

    public function registerVentaView(){
        $clientes = clientes::orderby('nombre_cliente','asc')
	                                  ->get();
        $productos = productos::orderby('nom_producto','asc')
	                                  ->get();
                            
        return view('Registros.registrarVentas')
        ->with('clientes',$clientes)
        ->with('productos',$productos);
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
        Session::flash('success', 'La devolución fue registrada correctamente.');
        // Redirige a la vista que quieres mostrar el mensaje
        return redirect()->route('devoluciones.form');

    }
    
    public function showDevolucionesForm(Request $request)
    {   
        $id_cliente = DB::select("SELECT id_cliente AS icCli FROM clientes ORDER BY id_cliente DESC LIMIT 1");
        // Obtener las devoluciones relacionadas con el cliente
        $ventas = DB::table('detalles_ventas')
            ->join('ventas', 'detalles_ventas.id_venta', '=', 'ventas.id_venta')
            ->select('ventas.id_venta',
                'ventas.fecha_venta as fecha',
                'detalles_ventas.cant_devueltas as cantidad_devuelta'
            )
            ->where('ventas.id_cliente', $id_cliente)
            ->get();

        // Pasar los datos a la vista
        return view('registros.udptDevoluciones', [
            'clientes' => $id_cliente,
            'ventas' => $ventas,
        ]);
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
