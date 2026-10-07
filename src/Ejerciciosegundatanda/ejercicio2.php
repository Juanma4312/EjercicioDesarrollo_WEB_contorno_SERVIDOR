<?php
include "Direccion.php";

class Persona{
    private string $nombre;
    private int $edad;
    private Direccion $direccionPostal;
    


    public function __construct(string $nombre, int $edad, Direccion $direccionPostal)
    {
        $this->nombre = $nombre;
        $this->edad = $edad; 
        $this->direccionPostal = $direccionPostal;
    }

    public function getNombre() : string{
    return  $this->nombre;
    }

    public function getEdad() :  int{
        return $this->edad;
    }

    public function setNombre(string $nombre) : persona{
        $this->nombre = $nombre;
        return $this;
    }

    public function setEdad(int $edad) : persona{
        if($edad>0){
            $this-> edad =$edad;
            
        }else{
            echo "La edad no puede ser negativa";
        }
        return $this;
        
    }

    public function esMayorDeEdad(int $edad):bool{
        return $this -> edad >= 18;

    } 

    public function showDirecion(string $nombre, Direccion $direccionPostal){
        return "La dirección de $nombre es $direccionPostal";
    }
}


?>