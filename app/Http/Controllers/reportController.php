<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;


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

    public function reportHistorialComprasVista(Request $request){
        $reporte = \DB::select("SELECT a.id_survey, a.name_per, a.a_pa, a.a_ma, a.year, a.sexo, a.happiness, 
                               a.stars, a.requests, c.content AS content_name, cat.categorie AS category_name, 
                               a.genre, a.studio, a.suggestions, a.dev_comments
                        FROM anime_survey AS a
                        INNER JOIN contents AS c ON c.id_content = a.id_content
                        INNER JOIN categories AS cat ON cat.id_categorie = a.id_categorie
                        WHERE a.stars > 0");

        return view ('Reportes.reporte.reporteHistorialCompras')
            ->with($reporte);
}
}
