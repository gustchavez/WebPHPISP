<?php

class Telefono
{
 
    private $id;

    private $numero;

    private $particularCodigo;

    public function __construct($id=null, $numero=null, $particularCodigo=null)
    {  
        $this->id    = $id;
        $this->numero       = $numero;
        $this->particularCodigo  = $particularCodigo;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setParticularCodigo($particularCodigo = null)
    {
        $this->particularCodigo = $particularCodigo;

        return $this;
    }

    public function getParticularCodigo()
    {
        return $this->particularCodigo;
    }
}
