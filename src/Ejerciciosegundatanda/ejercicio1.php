<?php
class Persona{
    private String $nombre;
    private int $edad;


    public function __construct(string $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad; 
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
        $this-> edad =$edad;
        return $this;
    }


}




?>