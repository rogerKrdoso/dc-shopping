<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosNoticiasController extends Controller
{
    public function index()
    {
        
        return view('site.pages.eventos-e-noticias');
    }
}
