<?php

namespace App\Http\Controllers;

use App\Models\ModelsPost;
use Illuminate\Http\Request;

class ControllerEliminar extends Controller
{
    public function destroy($id)
    {
        $proyecto = ModelsPost::find($id);
        $proyecto->delete();

        return redirect('/posts');

    }
}
