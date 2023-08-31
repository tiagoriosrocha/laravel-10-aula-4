<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AtividadeController;

Route::get('/atividade/create',[AtividadeController::class, 'create']);
Route::post('/atividade',[AtividadeController::class, 'store']);
Route::get('/atividades', [AtividadeController::class, 'index']);
Route::get('/atividade/{id}',[AtividadeController::class, 'show']);
