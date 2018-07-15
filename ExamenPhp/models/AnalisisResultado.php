<?php

class AnalisisResultado
{
    
    private $id;

    private $fecha;

    private $ppm;

    private $estado;

    private $analisisMuestra;

    private $analisisTipo;

    private $empleadoRut;

    public function __construct($id=null, $fecha=null, $ppm=null, $estado=null, $analisisMuestra=null, $analisisTipo=null, $empleadoRut=null)
    {  
        $this->id    = $id;
        $this->fecha       = $fecha;
        $this->ppm  = $ppm;
        $this->estado    = $estado;
        $this->analisisMuestra = $analisisMuestra;
        $this->analisisTipo     = $analisisTipo;
        $this->empleadoRut     = $empleadoRut;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setPpm($ppm)
    {
        $this->ppm = $ppm;

        return $this;
    }

    public function getPpm()
    {
        return $this->ppm;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setAnalisisMuestra($analisisMuestra = null)
    {
        $this->analisisMuestra = $analisisMuestra;

        return $this;
    }

    public function getAnalisisMuestra()
    {
        return $this->analisisMuestra;
    }

    public function setAnalisisTipo($analisisTipo = null)
    {
        $this->analisisTipo = $analisisTipo;

        return $this;
    }

    public function getAnalisisTipo()
    {
        return $this->analisisTipo;
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
}
