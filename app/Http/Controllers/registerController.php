<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Productos;
use App\Models\Clientes;
use App\Models\Ventas;
use App\Models\Detalles_Ventas;
use Illuminate\Http\Request;
use App\Models\devoluciones;
use Illuminate\Support\Facades\DB;
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
        $idultimocategoria = \DB::select("SELECT id_categoria + 1 as nuevaclave FROM 
        categorias ORDER BY id_categoria DESC LIMIT 1");
        $sigue = !empty($idultimocategoria) ? $idultimocategoria[0]->nuevaclave : 1;
        return view('Catalogos.Categorias.registrarCategoria')->with('sigue', $sigue);
    }

    public function registerProductView()
    {
        // Code of Bryan
    }

    public function registerRentView()
    {
        // return view('Registros.registrarAlquiler');
    }

    public function registerDevolutionView(Request $request)
    {
        // Se obtiene el valor del input con nombre "id_venta"
        $idVenta = $request->input('id_venta');
        $detallesVentas = Detalles_Ventas::orderby('id_venta', 'asc')->get();

        if ($idVenta === $detallesVentas) {
        }

        return view('Registros.registrarDevolucion')
            ->with('detallesVentas', $detallesVentas);
    }

    public function registerVentaView()
    {
        $clientes = clientes::orderby('nombre_cliente', 'asc')
            ->get();
        $productos = productos::orderby('nom_producto', 'asc')
            ->get();

        return view('Registros.registrarVentas')
            ->with('clientes', $clientes)
            ->with('productos', $productos);
    }


    // Funciones para la funcionalidad
    public function saveClient(Request $request)
    {
        $clientes = new clientes;
        $clientes->id_cliente = $request->id_cliente;
        $clientes->nombre_cliente = $request->nombre_cliente;
        $clientes->ap_cliente = $request->ap_cliente;
        $clientes->am_cliente = $request->am_cliente;
        $clientes->telefono = $request->telefono;
        $clientes->correo = $request->correo;
        $clientes->save();

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
        $id_venta = $request->input('id_venta');
        $id_wasa = 1;

        // Obtener las devoluciones relacionadas con el cliente
        $ventasDetalles = DB::select('SELECT * FROM detalles_ventas WHERE id_venta = ?', [$id_venta]);

        // Pasar los datos a la vista
        return view('registros.updtDevoluciones')
            ->with('ventasDetalles', $ventasDetalles);
    }

    public function updateDevoluciones(Request $request)
    {
        // Validar que los datos requeridos estén presentes
        $request->validate([
            'id_venta' => 'required|integer|exists:detalles_ventas,id_venta',
            'id_producto' => 'required|integer|exists:detalles_ventas,id_producto',
            'cant_devuelta' => 'required|integer|min:0',
        ]);

        // Obtener el detalle de la venta
        $detalleVenta = DB::table('detalles_ventas')
            ->where('id_venta', $request->id_venta)
            ->where('id_producto', $request->id_producto)
            ->first();

        // Validar la cantidad devuelta
        if (!$detalleVenta || $request->cant_devuelta > $detalleVenta->cantidad) {
            return back()->withErrors([
                'cant_devuelta' => "La cantidad a devolver no puede ser mayor que la comprada ({$detalleVenta->cantidad}).",
            ]);
        }

        // Actualizar la cantidad devuelta
        DB::table('detalles_ventas')
            ->where('id_venta', $request->id_venta)
            ->where('id_producto', $request->id_producto)
            ->update(['cant_devueltas' => $request->cant_devuelta]);

        // Redirigir con mensaje de éxito
        return back()->with('success', 'Devolución actualizada correctamente.');
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
