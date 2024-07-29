<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ModelsPost;
use Illuminate\Http\Request;

class ControllerObtenerTodo extends Controller
{
    public function index()
    {
        $proyectos = ModelsPost::all();
        return view('ViewTodo', compact('proyectos'));
    }
}
