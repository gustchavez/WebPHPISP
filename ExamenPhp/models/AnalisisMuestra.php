<?php
class AnalisisMuestra
{

    private $id;

    private $fechaRecepcion;

    private $temperatura;

    private $cantidad;

    private $empleadoRut;

    private $particularCodigo;

    private $empresaCodigo;

    public function __construct($id=null, $fechaRecepcion=null, $temperatura=null, $cantidad=null, $empleadoRut=null, $particularCodigo=null, $empresaCodigo=null)
        {  
            $this->id    = $id;
            $this->fechaRecepcion       = $fechaRecepcion;
            $this->temperatura  = $temperatura;
            $this->cantidad    = $cantidad;
            $this->empleadoRut = $empleadoRut;
            $this->particularCodigo     = $particularCodigo;
            $this->empresaCodigo     = $empresaCodigo;
        }


    public function getId()
    {
        return $this->id;
    }

    public function setFechaRecepcion($fechaRecepcion)
    {
        $this->fechaRecepcion = $fechaRecepcion;

        return $this;
    }

    public function getFechaRecepcion()
    {
        return $this->fechaRecepcion;
    }

    public function setTemperatura($temperatura)
    {
        $this->temperatura = $temperatura;

        return $this;
    }

    public function getTemperatura()
    {
        return $this->temperatura;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setEmpleadoRut($empleadoRut = null)
    {
        $this->empleadoRut = $empleadoRut;

        return $this;
    }

    public function getEmpleadoRut()
    {
        return $this->empleadoRut;
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