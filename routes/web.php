<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mantenedor', function () {
    return view('MantenedorView');
});

Route::get('/mantenedor/{_id}', function ($_id) {
    return "mantenedor del id buscado: {$_id}";
    // return view('MantenedorView');
});

Route::get('/proyecto', function () {
    return view('ProyectoView');
});

Route::get('/proyecto/{_id}', function ($_id) {
    return "proyecto del id buscado: {$_id}";
    // return view('ProyectoView');
});

Route::get('/uf', 'App\Http\Controllers\UfController@showUf');
//Route::get('/uf', [UfController::class, 'showUf']);
//tuve que ingresar la path completa para que funcionara y encontrara la clase en el controlador
