<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        // Retorna la vista para la página de inicio
        return view('welcome'); // resources/views/home.blade.php
    }
}
