<?php

class AnalisisTipo
{
   
    private $id;

    private $nombre;

    public function __construct($id=null, $nombre=null)
    {  
        $this->id    = $id;
        $this->nombre       = $nombre;
    }
    public function getId()
    {
        return $this->id;
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
}
