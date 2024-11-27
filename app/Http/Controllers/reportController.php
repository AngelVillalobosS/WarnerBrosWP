<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use App\Models\Ventas;
use App\Models\Detalles_Ventas;
use Illuminate\Support\Facades\DB; 

use Illuminate\Http\Request;

class reportController extends Controller
{
    public function reportContMasVendidoView(){
        return view('Reportes.reporteContMasVendido');
    }

    public function reportContMasVendido(Request $request)
    {
        // Validar las fechas del formulario
        $request->validate([
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        ]);
    
        // Obtener las fechas del formulario
        $fechaInicio = $request->input('fecha_inicio');
        $fechaFin = $request->input('fecha_fin');
    
        // Realizar la consulta para obtener los 5 productos más vendidos en el rango de fechas
        $productosMasVendidos = DB::table('Detalles_Ventas')
            ->join('Ventas', 'Ventas.id_venta', '=', 'Detalles_Ventas.id_venta')
            ->join('Productos', 'Productos.id_producto', '=', 'Detalles_Ventas.id_producto')
            ->whereBetween('Ventas.fecha_venta', [$fechaInicio, $fechaFin])
            ->select(
                'Productos.nom_producto',
                DB::raw('SUM(Detalles_Ventas.cantidad) as cantidad_vendida'),
                'Productos.precio_producto',
                'Ventas.fecha_venta'  // Agregar la fecha de la venta a la selección
            )
            ->groupBy('Productos.id_producto', 'Productos.nom_producto', 'Productos.precio_producto', 'Ventas.fecha_venta')
            ->orderByDesc('cantidad_vendida')
            ->limit(5)
            ->get();
    
        // Pasar los datos a la vista
        return view('Reportes.reporteContMasVendido', compact('productosMasVendidos', 'fechaInicio', 'fechaFin'));
    }
    

}
