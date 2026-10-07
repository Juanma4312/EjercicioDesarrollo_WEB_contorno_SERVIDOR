<?php
class Direccion
{
    private string $calle;
    private string $ciudad;
    private int $codPostal;


    public function __construct(string $calle, string $ciudad, int $codPostal)
    {
        $this->calle = $calle;
        $this->ciudad = $ciudad;
        $this->codPostal = $codPostal;
    }

    public function getcalle(): string
    {
        return $this->calle;
    }

    public function getciudad(): string
    {
        return $this->ciudad;
    }

    public function getcodpostal(): int
    {
        return $this->codPostal;
    }


    public function setcalle(String $calle): Direccion
    {
        $this->calle = $calle;
        return $this;
    }

    public function setciudad(String $ciudad): Direccion
    {
        $this->ciudad = $ciudad;
        return $this;
    }

    public function setcodPostal(int $codPostal): Direccion
    {
        $this->codPostal = $codPostal;
        return $this;
    }
}


