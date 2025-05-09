<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NormativaController extends Controller
{
    public function index()
    {
        return view('normativa');
    }
}
