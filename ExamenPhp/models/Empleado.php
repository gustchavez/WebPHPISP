<?php

class Empleado
{

    private $rut;

    private $nombre;

    private $password;

    private $categoria;

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

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
}
