<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

use function PHPUnit\Framework\returnSelf;
use function PHPUnit\Framework\returnValue;

class reportController extends Controller
{
    public function reportContMasVendidoView()
    {
        return view('Reportes.reporteContMasVendido');
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
