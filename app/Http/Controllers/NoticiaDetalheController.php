<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaDetalheController extends Controller
{
    public function index()
    {
        
        return view('site.pages.noticia-detalhe');
    }
}
