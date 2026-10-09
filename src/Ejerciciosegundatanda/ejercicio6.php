<?php
include_once "ejercicio2.php";

class Profesor extends Persona{
private string $especialidad;

	public function __construct(string $nombre, int $edad,Direccion $direccionPostal ,string $especialidad)
    {
        $this->especialidad = $especialidad;
        return parent::__construct($nombre, $edad, $direccionPostal);
    }

    public function getEspecialidad():string{
        return $this-> especialidad;
    }

    public function setEspecialidad(string $especialidad):Profesor{
        $this-> especialidad = $especialidad;
        return $this;
    }


    public function mostrarInformacion():string {
        $nombre  = parent::getNombre();
        $edad = parent::getEdad();
        return "El profesor $nombre tiene $edad años, y su especialidad es $this->especialidad";

    }

}
?>