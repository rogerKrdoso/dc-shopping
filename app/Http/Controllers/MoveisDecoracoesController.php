<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoveisDecoracoesController extends Controller
{
    public function index()
    {
        
        return view('site.pages.moveis-e-decoracoes');
    }
}
