<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AtividadeController;

Route::get('/atividade/create',[AtividadeController::class, 'create']);
Route::post('/atividade',[AtividadeController::class, 'store']);
Route::get('/atividades', [AtividadeController::class, 'index']);
Route::get('/atividade/{id}',[AtividadeController::class, 'show']);
Route::get('/atividade/{id}/edit', [AtividadeController::class, 'edit']);
Route::put('/atividade/{id}', [AtividadeController::class, 'update']);
Route::get('/atividade/{id}/delete',[AtividadeController::class, 'delete']);
Route::delete('/atividade/{id}',[AtividadeController::class, 'destroy']);