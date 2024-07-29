<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ModelsPost;
use Illuminate\Http\Request;

class ControllerCrear extends Controller
{
    public function create()
    {
    return view('ViewCreate');
}

    public function store(Request $request)
    {
         $post = new ModelsPost();

         $post->nombre = $request->nombre;
         $post->fechainicio = $request->fechainicio;
         $post->estado = $request->estado;
         $post->responsable = $request->responsable;
         $post->monto = $request->monto;

         $post->save();

         return redirect('/posts');

}
}