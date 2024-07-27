<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyectoModel extends Model
{
    use HasFactory;
    //definimos atributos de la clase
    private $id;
    private $nombre;
    private $activo;
    private $fechaInicio;
    private $responsable;
    private $monto;

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
    public function setFechaInicio($_n){
        $this->fechaInicio = $_n;
    }
    public function setResponsable($_n){
        $this->responsable = $_n;
    }
    public function setMonto($_n){
        $this->monto = $_n;
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
    public function getFechaInicio(){
        return $this->fechaInicio;
    }
    public function getResponsable(){
        return $this->responsable;
    }
    public function getMonto(){
        return $this->monto;
    }
}