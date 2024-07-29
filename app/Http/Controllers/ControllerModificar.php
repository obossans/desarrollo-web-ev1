<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelsPost;

class ControllerModificar extends Controller
{
    public function edit($id)
    {
        $proyecto = ModelsPost::find($id);
        return view('ViewModificar', compact('proyecto'));
    }

    public function update(Request $request, $id)
    {
        $proyecto = ModelsPost::find($id);

        $proyecto->nombre = $request->nombre;
        $proyecto->fechainicio = $request->fechainicio;
        $proyecto->estado = $request->estado;
        $proyecto->responsable = $request->responsable;
        $proyecto->monto = $request->monto;

        $proyecto->save();

        return redirect("/posts/{$proyecto->id}");
    }
        
    }

