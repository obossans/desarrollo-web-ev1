<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ModelsPost;
use Illuminate\Http\Request;

class ControllerVerUno extends Controller
{
    // Método para obtener un proyecto por ID
    public function show($id)
    {
        // Buscar el proyecto por ID
        $proyecto = ModelsPost::find($id);

        // Retornar la vista con el proyecto o null
        return view('ViewUno', compact('proyecto'));
    }
}