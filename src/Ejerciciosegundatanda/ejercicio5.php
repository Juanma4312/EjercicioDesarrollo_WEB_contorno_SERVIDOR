<?php
include "ejercicio2.php";
class Estudiante extends Persona
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
    
    public function mostrarInformacion():string {
        $nombre = parent::__tooString();
        return "$nombre, pertenerce al grado de: $this->grado";
    }

    public static function calcularPromedio(array $notas): float{
        $media = 0.0;
        foreach($notas as $nota){
            $media += $nota;
        }

        $media = $media / count($notas);
        return $media;
    }
}

//Utilizo el método estático

$notas = [5,5.5,6,];
echo "Media: ".Estudiante::calcularPromedio($notas);
?>