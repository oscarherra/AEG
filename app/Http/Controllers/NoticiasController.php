<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index()
    {
        return view('noticias'); // Asegúrate de que la vista 'noticias.blade.php' exista en resources/views
    }
}
