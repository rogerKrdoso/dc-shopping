<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MercadoGastronomiaController extends Controller
{
    public function index()
    {
        
        return view('site.pages.mercado-paralelo-e-gastronomia');
    }
}
