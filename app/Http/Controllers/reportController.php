<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportController extends Controller
{
    public function reportContMasVendidoView(){
        return view('Reportes.reporteContMasVendido');
    }
}
