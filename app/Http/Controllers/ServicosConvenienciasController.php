<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicosConvenienciasController extends Controller
{
    public function index()
    {
        
        return view('site.pages.servicos-e-conveniencias');
    }
}
