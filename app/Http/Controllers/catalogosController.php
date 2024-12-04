<?php

namespace App\Http\Controllers;

// Autores: Irma Mireya Castro Carranza, Angel Gabriel Villalobos Saucedo 
// Este controlador maneja las vistas relacionadas con los catálogos del sistema.

class catalogosController extends Controller
{
    // Método para mostrar la vista del catálogo de clientes
    public function catClientesView()
    {
        return view('Catalogos.Clientes.clientes'); // Retorna la vista correspondiente al catálogo de clientes
    }

    // Método para mostrar la vista del catálogo de categorías
    public function catCategoriasView()
    {
        return view('Catalogos.Categorias.categorias'); // Retorna la vista correspondiente al catálogo de categorías
    }

    // Método para mostrar la vista del catálogo de productos
    public function catProductosView()
    {
        // Código de Bryan
        // Aquí se podría implementar la lógica para cargar la vista del catálogo de productos
    }
}
