<?php

namespace App\Http\Controllers;
use App\Models\Categorias;
use Illuminate\Http\Request;
use Session;

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
        return view('Registros.registrarVentas');
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
            // Agregar mensaje flash
        Session::flash('mensaje', "La categoría con nombre {$request->nom_categoria} ha sido registrada");


        // Redirigir sin mensaje adicional
        return redirect()->route('registrarCategoria');
    }


    public function registerProduct(){
        // Code of Bryan
    }

}
