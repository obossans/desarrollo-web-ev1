<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MantenedorModel extends Model
{
    use HasFactory;
    //definimos atributos de la clase
    private $id;
    private $nombre;
    private $activo;

    public function __construct()
    {
        //constructor para poder generar la instancia
    }

    //mutadores - permiten generar cambio
    public function setId($_n){
        $this->id = $_n;
    }
    public function setNombre($_n){
        $this->nombre = $_n;
    }
    public function setActivo($_n){
        $this->activo = $_n;
    }
    //accesadores - permiten obtener el valor
    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getActivo(){
        return $this->activo;
    }
}