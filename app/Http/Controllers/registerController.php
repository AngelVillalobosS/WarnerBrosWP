<?php

namespace App\Http\Controllers;
use App\Models\Categorias;
use App\Models\Productos;
use App\Models\Clientes;
use App\Models\Ventas;
use App\Models\Detalles_Ventas;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class registerController extends Controller
{
    // Funciones para regresar las vistas
    public function registerClientView(){
        return view('Catalogos.Clientes.registrarCliente');
    }
    
    public function registerCategorieView(){
        $idultimocategoria = \DB::select("SELECT id_categoria + 1 as nuevaclave FROM 
        categorias ORDER BY id_categoria DESC LIMIT 1");
        $sigue = !empty($idultimocategoria) ? $idultimocategoria[0]->nuevaclave : 1;
        return view('Catalogos.Categorias.registrarCategoria')->with('sigue',$sigue);
    }

    public function registerProductView(){
        // Code of Bryan
    }

    public function registerRentView(){
        // return view('Registros.registrarAlquiler');
    }
    
    public function registerDevolutionView(){
        return view('Registros.registrarDevolucion');
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
    public function registerClient(){
        // Code of Angel
    }
    
    public function registerCategorie(Request $request)
    {
        // Validar los datos ingresados
        $request->validate([
            'nom_categoria' => 'required|string|max:255',
        ]);
    
        // Buscar o crear el registro en 'categorias'
        $categoria = Categorias::firstOrCreate(['nom_categoria' => $request->nom_categoria]);
    
        // Verificar si la categoría fue creada o ya existía
        if ($categoria->wasRecentlyCreated) {
            // Agregar mensaje flash de éxito
            Session::flash('mensaje', "La categoría con nombre '{$request->nom_categoria}' ha sido registrada.");
        } else {
            // Agregar mensaje flash indicando que ya existe
            Session::flash('mensaje', "La categoría con nombre '{$request->nom_categoria}' ya ha sido registrada.");
        }
    
        // Redirigir sin mensaje adicional
        return redirect()->route('registrarCategoria');
    }

    public function registerVenta(Request $request)
    {
        // Decodificar los productos desde el JSON que fue enviado
        $productos = json_decode($request->productos_json); // Cambié 'productos' por 'productos_json'
    
        // Crear la venta sin validaciones previas
        $venta = new Ventas();
        $venta->id_cliente = $request->id_cliente;
        $venta->fecha_venta = Carbon::parse($request->fecha_venta);  // Convertir la fecha
        $venta->total = 0;  // El total se actualizará después
        $venta->save();
    
        // Variable para calcular el total
        $totalVenta = 0;
    
        // Insertar los detalles de la venta
        foreach ($productos as $producto) {
            // Obtener el precio del producto desde la base de datos
            $productoInfo = Productos::find($producto->id_producto);
            $precioProducto = $productoInfo->precio_producto;
    
            $detalleVenta = new Detalles_Ventas();
            $detalleVenta->id_venta = $venta->id_venta;
            $detalleVenta->id_producto = $producto->id_producto;
            $detalleVenta->precio_unitario = $precioProducto;  // Usar el precio de la base de datos
            $detalleVenta->cantidad = $producto->cantidad;
            $detalleVenta->cant_devueltas = 0; // Inicializamos las devoluciones en 0
            $detalleVenta->save();
    
            // Actualizamos el total de la venta
            $totalVenta += $precioProducto * $producto->cantidad;
        }
    
        // Actualizar el total de la venta
        $venta->total = $totalVenta;
        $venta->save();
    
        // Mensaje de éxito
        Session::flash('mensaje', "La Venta ha sido registrada.");
        return redirect()->route('registrarVenta');
    }
    
    


    public function registerProduct(){
        // Code of Bryan
    }

}
