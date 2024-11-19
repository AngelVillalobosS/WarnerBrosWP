<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    // Funciones para regresar las vistas
    public function registerClientView(){
        return view('Catalogos.Clientes.registrarCliente');
    }
    
    public function registerCategorieView(){
        // Code of Mireya
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

    // Funciones para la funcionalidad
    public function registerClient(){
        // Code of Angel
    }

    public function saveClient(Request $request){
        return ('wasaaa');
    }

    public function saveDevolution(Request $request){
        $validatedData = $request->validate([
            'fecha_venta' => 'required',
            'motivo' => 'required'
        ]);

        return response()->json(['message' => 'Ruta alcanzada correctamente']);
    }


    
    public function registerCategorie(){
        // Code of Mireya
    }

    public function registerProduct(){
        // Code of Bryan
    }

}
