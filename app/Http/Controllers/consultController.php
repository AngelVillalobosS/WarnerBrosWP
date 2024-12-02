<?php

namespace App\Http\Controllers;
use App\Models\Categorias;
use App\Models\Clientes;
use Illuminate\Http\Request;

class consultController extends Controller
{
    // Regresar Vistas
    public function consultCategorieView()
    {
        $categorias = \DB::select("
            SELECT c.id_categoria, c.nom_categoria
            FROM categorias AS c
        ");
    
        return view('Catalogos.Categorias.consultarCategoria')
            ->with('categorias', $categorias);
    }

    public function consultCategorieFun(Request $request){
        // Recuperar el ID de la categoría enviado por el formulario
        $idCategoria = $request->input('id_categoria');
    
        // Buscar la categoría en la base de datos (esto depende de tu estructura de base de datos)
        $categoria = Categorias::find($idCategoria);
    
        // Verificar si la categoría existe
        if (!$categoria) {
            return redirect()->route('consultarCategoria')->with('error', 'Categoría no encontrada.');
        }
    
        // Pasar los datos de la categoría a la vista
        return view('Catalogos.Categorias.consultarCategoriaFuncion', compact('categoria'));

    }
    
        // Regresar Vistas
    public function consultClientView(Request $request)
    {
        /* $lastId = \DB::select("SELECT id_cliente + 1 AS icCli FROM clientes ORDER BY id_cliente DESC LIMIT 1");
        $cliente = Clientes::find($request->id_cliente);
        $nombre = Clientes::find($request->nombre);
        return view('Catalogos.Clientes.consultarCliente')
            ->with('nombre_cliente', $nombre)
            ->with('nextId', $lastId); */

            /* $clientes = clientes::orderby('id_cliente', 'asc')->get();
        return view('Catalogos.Clientes.consultarCliente')
            ->with('clientes', $clientes); */

            // dd($request->all());
        // Obtener el ID del cliente desde el formulario
        // Consultar cliente en la base de datos
        $reporte = \DB::connection('mysql')
            ->select("SELECT id_cliente, CONCAT(nombre_cliente, ' ', ap_cliente, ' ', am_cliente) AS nombre_completo, telefono, correo
                      FROM clientes 
                      ");

        // Si el cliente es encontrado, retornar la vista con los datos
        return view('Catalogos.Clientes.consultaCliente')
            ->with('reporte', $reporte);
    }

    public function wasa(Request $request)
    {
        // dd($request->all());
        // Obtener el ID del cliente desde el formulario
        $clientesId = $request->input('clientes');

        // Validación de que se haya proporcionado un ID
        if (empty($clientesId)) {
            return redirect()->route('consultaCliente')->withErrors('Por favor, ingrese un ID de cliente válido.');
        }

        // Consultar cliente en la base de datos
        $reporte = \DB::connection('mysql')
            ->select("SELECT id_cliente, CONCAT(nombre_cliente, ' ', ap_cliente, ' ', am_cliente) AS nombre_completo, telefono, correo
                      FROM clientes 
                      WHERE id_cliente = :clientes", [
                'clientes' => $clientesId
            ]);

        // Verificar si se encontró el cliente
        if (empty($reporte)) {
            return redirect()->route('consultaCliente')->withErrors('Cliente no encontrado.');
        }

        // Si el cliente es encontrado, retornar la vista con los datos
        return view('Catalogos.Clientes.consultaCliente')
            ->with('reporte', $reporte);
    }
}
