<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UfController;
use App\Http\Controllers\ControllerObtenerTodo;
use App\Http\Controllers\ControllerVerUno;
use App\Http\Controllers\ControllerCrear;
use App\Http\Controllers\ControllerModificar;
use App\Http\Controllers\ControllerEliminar;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [ControllerObtenerTodo::class, 'index']);

Route::get('/posts/crear', [ControllerCrear::class, 'create']);

Route::post('/posts', [ControllerCrear::class, 'store']);

Route::get('/posts/{id}', [ControllerVerUno::class, 'show']);

Route::get('/posts/{post}/edit', [ControllerModificar::class, 'edit']);

Route::get('/uf', [UfController::class, 'showUf']);

Route::put('/posts/{post}', [ControllerModificar::class, 'update']);

Route::delete('/posts/{post}', [ControllerEliminar::class, 'destroy']);