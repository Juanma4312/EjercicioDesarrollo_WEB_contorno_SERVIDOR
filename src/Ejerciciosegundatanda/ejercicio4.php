<?php
include "ejercicio2.php";
class estudiante extends Persona
{
    private string $grado;

    public function getGrado(): string
    {
        return $this->grado;
    }

    public function setGrado(string $grado):estudiante{
        $this->grado = $grado;
        return $this;
    }


    public function __construct(string $nombre, int $edad, string $grado)
    {
        $this->grado = $grado;
        parent::__construct($nombre, $edad);
    }
    
    public function mostrarInformacion(string $grado):string {
        $nombre = parent::getNombre();
        return "$nombre, pertenerce al grado de: $grado";
    }
}
