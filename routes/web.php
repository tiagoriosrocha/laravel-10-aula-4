<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AtividadeController;

Route::get('/atividades', [AtividadeController::class, 'index']);
Route::get('/atividade/{id}',[AtividadeController::class, 'show']);
