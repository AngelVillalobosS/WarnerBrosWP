<?php

namespace App\Http\Controllers;
// Autores: Irma Mireya Castro Carranza, Angel Gabriel Villalobos Saucedo 
// Este controlador maneja las vista inicial de la página 

class homeController extends Controller
{
    public function homeView()
    {
        return view('home');
    }
}
