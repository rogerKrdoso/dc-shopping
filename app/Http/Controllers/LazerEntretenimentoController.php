<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LazerEntretenimentoController extends Controller
{
    public function index()
    {
        
        return view('site.pages.lazer-e-entretenimento');
    }
}
