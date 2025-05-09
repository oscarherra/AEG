<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganoController extends Controller
{
    public function teeg()
    {
        return view('teeg'); // Retorna la vista de TEEG
    }

    public function defensoria()
    {
        return view('defensoria'); // Retorna la vista de la Defensoría Estudiantil
    }

    public function asambleistas() {
        return view('asambleistas');
    }

    public function asociaciones()
    {
        return view('asociaciones');
    }
}