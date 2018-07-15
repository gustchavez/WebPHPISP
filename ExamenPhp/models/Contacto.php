<?php

class Contacto
{
    private $rut;

    private $nombre;

    private $email;

    private $telefono;

    private $empresaCodigo;

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

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setEmpresaCodigo($empresaCodigo = null)
    {
        $this->empresaCodigo = $empresaCodigo;

        return $this;
    }

    public function getEmpresaCodigo()
    {
        return $this->empresaCodigo;
    }
}
