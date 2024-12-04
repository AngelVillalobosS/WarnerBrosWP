<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use App\Models\Ventas;
use App\Models\Detalles_Ventas;
use Illuminate\Support\Facades\DB; 

use App\Models\clientes;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

use function PHPUnit\Framework\returnSelf;
use function PHPUnit\Framework\returnValue;
 // Autores: Irma Mireya Castro Carranza y Ángel Gabriel Villalobos Saucedo
// Este controlador gestiona las vistas de los reportes y sus funcionalidades 
class reportController extends Controller
{
    public function reportContMasVendidoView()
    {
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
            DB::raw('SUM(Detalles_Ventas.cantidad) as cantidad_vendida') // Sumar las cantidades vendidas
        )
        ->groupBy('Productos.id_producto', 'Productos.nom_producto') // Agrupar solo por producto
        ->orderByDesc('cantidad_vendida') // Ordenar por cantidad vendida
        ->limit(5) // Limitar a los 5 más vendidos
        ->get();
    
        // Pasar los datos a la vista
        return view('Reportes.reporteContMasVendido', compact('productosMasVendidos', 'fechaInicio', 'fechaFin'));
    }
    


    public function reportHistComprasView()
    {
        $clientes = clientes::orderby('id_cliente', 'asc')->get();

        return view('Reportes.reporteHistorial')
            ->with('clientes', $clientes);
    }

    public function reportHistorialComprasVista(Request $request)
    {

        // Validar las fechas
        $request->validate([
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        ]);

        // Consulta a la base de datos
        $reporte = \DB::connection('mysql') // Ajustar si usas otra conexión
            ->select("SELECT 
                        c.id_cliente,
                        CONCAT(c.nombre_cliente, ' ', c.ap_cliente, ' ', c.am_cliente) AS nombre_completo,
                        SUM(v.total) AS total_acumulado,
                            COUNT(v.id_venta) AS cantidad_ventas
                        FROM 
                            ventas v
                        INNER JOIN 
                            clientes c ON v.id_cliente = c.id_cliente
                        WHERE 
                            v.fecha_venta BETWEEN :fecha_inicio AND :fecha_fin
                        GROUP BY 
                            c.id_cliente, c.nombre_cliente, c.ap_cliente, c.am_cliente
                        ORDER BY 
                            total_acumulado DESC
                        ", [
                                'fecha_inicio' => $request->input('fecha_inicio'),
                                'fecha_fin' => $request->input('fecha_fin'),
            ]);


        /* $reporte = \DB::connection('mysql') // Si usas SQLite; ajustar si es diferente
            ->select(" SELECT 
                v.id_venta,
                CONCAT(c.nombre_cliente, ' ', c.ap_cliente, ' ', c.am_cliente) AS nombre_completo,
                v.fecha_venta,
                v.total
            FROM 
                ventas v
            INNER JOIN 
                clientes c ON v.id_cliente = c.id_cliente
            WHERE 
            v.id_cliente = :clientes AND
                v.fecha_venta BETWEEN :fecha_inicio AND :fecha_fin
        ", [
                'clientes' => $request->input('clientes'),
                'fecha_inicio' => $request->input('fecha_inicio'),
                'fecha_fin' => $request->input('fecha_fin'),
            ]); */

        // Retornar vista con los datos
        return view('Reportes.reporte.reporteHistorialCompras')
            ->with('reporte', $reporte);
    }
}
