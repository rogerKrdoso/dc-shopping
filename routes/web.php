<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventosNoticiasController;
use App\Http\Controllers\MercadoGastronomiaController;
use App\Http\Controllers\MoveisDecoracoesController;
use App\Http\Controllers\ServicosConvenienciasController;
use App\Http\Controllers\LazerEntretenimentoController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\NoticiaDetalheController;

// Route for Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route for EventosNoticiasController
Route::get('/eventos-e-noticias', [EventosNoticiasController::class, 'index'])->name('eventos-e-noticias');

// Route for MercadoGastronomiaController
Route::get('/mercado-paralelo-e-gastronomia', [MercadoGastronomiaController::class, 'index'])->name('mercado-paralelo-e-gastronomia');

// Route for MoveisDecoracoesController
Route::get('/moveis-e-decoracoes', [MoveisDecoracoesController::class, 'index'])->name('moveis-e-decoracoes');

// Route for ServicosConvenienciasController
Route::get('/servicos-e-conveniencias', [ServicosConvenienciasController::class, 'index'])->name('servicos-e-conveniencias');

// Route for LazerEntretenimentoController
Route::get('/lazer-e-entretenimento', [LazerEntretenimentoController::class, 'index'])->name('lazer-e-entretenimento');

// Route for ContatoController
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

// Route for NoticiaDetalheController
Route::get('/noticia-detalhe', [NoticiaDetalheController::class, 'index'])->name('noticia-detalhe');