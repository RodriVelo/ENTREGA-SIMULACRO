<?php 

class cliente { 
    private $nombre;
    private $apellido;
    private $estadoDeBaja;
    private $tipoDni;
    private $dni;

    public function __construct($nombre,$apellido,$estadoDeBaja,$tipoDni,$dni){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->estadoDeBaja=$estadoDeBaja;
        $this->tipoDni=$tipoDni;
        $this->dni=$dni;
    }


    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

    }


    public function getEstadoDeBaja()
    {
        return $this->estadoDeBaja;
    }


    public function setEstadoDeBaja($estadoDeBaja)
    {
        $this->estadoDeBaja = $estadoDeBaja;
    }

    public function getTipoDni()
    {
        return $this->tipoDni;
    }

    public function setTipoDni($tipoDni)
    {
        $this->tipoDni = $tipoDni;

       
    }


    public function getDni()
    {
        return $this->dni;
    }

    public function setDni($dni)
    {
        $this->dni = $dni;

    }

    public function __toString()
    {
        return ($this->getNombre()."\n".
                $this->getApellido()."\n".
                $this->getEstadoDeBaja()."\n".
                $this->getTipoDni()."\n".
                $this->getDni()."\n");
    }
}