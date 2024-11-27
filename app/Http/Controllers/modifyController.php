<?php

namespace App\Http\Controllers;
use App\Models\Categorias;
use Illuminate\Http\Request;
use App\Models\clientes;
use Session;

class modifyController extends Controller
{
    public function modifyClientView()
    {
        $clientes = clientes::orderby('id_cliente', 'asc')->get();
        return view('Catalogos.Clientes.modificarCliente')
            ->with('clientes', $clientes);
    }

    public function showModifyClientForm(Request $request)
    {

        // Obtener el ID de la categoría enviado desde el formulario
        $id_cliente = $request->input('clientes');

        // Buscar la categoría en la base de datos usando el id_cliente
        $clientes = clientes::find($id_cliente);

        // Si la categoría no existe, puedes redirigir o mostrar un mensaje de error
        if (!$clientes) {
            return redirect()->route('modificarCliente')->with('error', 'Cliente no encontrado');
        }
        // Pasar tanto el id_cliente como el nombre de la categoría a la vista
        return view('Catalogos.clientes.modificarDatosCliente', [
            // 'clientes' => $clientes,  // Asegúrate de pasar $clientes a la vista
            'id_cliente' => $id_cliente,
            'nombre_cliente' => $clientes->nombre_cliente,
            'ap_cliente' => $clientes->ap_cliente,
            'am_cliente' => $clientes->am_cliente,
            'telefono' => $clientes->telefono,
            'correo' => $clientes->correo
        ]);
    }

    public function updateClient(Request $request)
    {
        // Obtener los datos del formulario
        $id_cliente = $request->input('id_cliente');
        $nuevo_nomb = $request->input('nombre_cliente');
        $nuevo_ap = $request->input('ap_cliente');
        $nuevo_am = $request->input('am_cliente');
        $nuevo_tlfn = $request->input('telefono');
        $nuevo_email = $request->input('correo');

        // Buscar la categoría en la base de datos
        $clientes = clientes::find($id_cliente);

        // Si la categoría no existe, redirigir con un mensaje de error
        if (!$clientes) {
            Session::flash('error', 'Categoría no encontrada');
            return redirect()->route('modificarCliente');
        }

        // Actualizar el nombre de la categoría
        $clientes->nombre_cliente = $nuevo_nomb;
        $clientes->ap_cliente = $nuevo_ap;
        $clientes->am_cliente = $nuevo_am;
        $clientes->telefono = $nuevo_tlfn;
        $clientes->correo = $nuevo_email;
        $clientes->save();

        // Usar Session::flash para guardar el mensaje temporalmente
        Session::flash('mensaje', "El cliente con ID '{$id_cliente}' se ha actualizado exitosamente.");

        // Redirigir con un mensaje de éxito
        return redirect()->route('modificarCliente');
    }

    public function modifyCategorieView()
    {
        $categorias = categorias::orderby('nom_categoria','asc')
	                                  ->get();
        return view('Catalogos.Categorias.modificarCategoria')->with('categorias',$categorias);
    }

    public function modifyProductView()
    {
        // Code of Bryan
    }
    public function modifyCatFunctView(Request $request)
    {
        // Obtener el ID de la categoría enviado desde el formulario
        $id_categoria = $request->input('id_categoria');
        
        // Buscar la categoría en la base de datos usando el id_categoria
        $categoria = Categorias::find($id_categoria);
        
        // Si la categoría no existe, puedes redirigir o mostrar un mensaje de error
        if (!$categoria) {
            return redirect()->route('modificarCategoria')->with('error', 'Categoría no encontrada');
        }

        // Pasar tanto el id_categoria como el nombre de la categoría a la vista
        return view('Catalogos.Categorias.modificarCategoriaFuncion', [
            'id_categoria' => $id_categoria,
            'nombre_categoria' => $categoria->nom_categoria
        ]);
    }
   
   // Método para manejar la actualización del nombre de la categoría
   public function updateCategorie(Request $request)
{
    // Obtener los datos del formulario
    $id_categoria = $request->input('id_categoria');
    $nuevo_nombre = $request->input('nom_categoria');
    
    // Buscar la categoría en la base de datos
    $categoria = Categorias::find($id_categoria);

    // Si la categoría no existe, redirigir con un mensaje de error
    if (!$categoria) {
        Session::flash('error', 'Categoría no encontrada');
        return redirect()->route('modificarCategoria');
    }

    // Actualizar el nombre de la categoría
    $categoria->nom_categoria = $nuevo_nombre;
    $categoria->save();

    // Usar Session::flash para guardar el mensaje temporalmente
    Session::flash('mensaje', "La categoría con nombre '{$nuevo_nombre}' se ha actualizado exitosamente.");

    // Redirigir con un mensaje de éxito
    return redirect()->route('modificarCategoria');
}

}
