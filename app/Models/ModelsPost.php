<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsPost extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'proyectos'; 

    protected $fillable = [
        'nombre',
        'fechainicio', 
        'estado',
        'responsable',
        'monto'
    ];
}
