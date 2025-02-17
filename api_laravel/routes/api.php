<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;

Route::get('/noticias', [NoticiaController::class, 'index']);

Route::get('/noticias/{id}', [NoticiaController::class, 'show']);

Route::post('/noticias', [NoticiaController::class, 'store']);

Route::put('/noticias/{id}', function(){
    return "actualizando noticias";  
});

Route::delete('/noticias/{id}', [NoticiaController::class, 'destroy']);