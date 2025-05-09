<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganosController extends Controller
{
    public function index()
    {

        return view('organos'); // resources/views/organos.blade.php
    }
}
