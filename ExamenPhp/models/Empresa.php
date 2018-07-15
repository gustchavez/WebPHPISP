<?php

class Empresa
{

    private $codigo;

    private $rut;

    private $nombre;

    private $password;

    private $direccion;

    public function __construct($codigo=null, $rut=null, $nombre=null, $password=null, $direccion=null)
    {  
        $this->codigo    = $codigo;
        $this->rut       = $rut;
        $this->nombre  = $nombre;
        $this->password    = $password;
        $this->direccion = $direccion;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    public function getRut()
    {
        return $this->rut;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }
}
