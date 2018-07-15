<?php
require_once "DB.php";

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


    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    public function buscarTodas(){
            $db = new DB();
            $query = "SELECT id, fechaRecepcion, temperatura, cantidad, empleadoRut, particularCodigo, empresaCodigo FROM AnalisisMuestra";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            foreach($rs as $fila){
                $AnalisisMuestra[] = new AnalisisMuestra($fila["id"],$fila["fechaRecepcion"],$fila["temperatura"],$fila["cantidad"],$fila["empleadoRut"],$fila["particularCodigo"],$fila["empresaCodigo"]);
            }
            return $AnalisisMuestra;
        }
        
        public function crear($id, $fechaRecepcion, $temperatura, $cantidad, $empleadoRut, $particularCodigo, $empresaCodigo){
            $db = new DB();
            $query = "INSERT INTO AnalisisMuestra (fechaRecepcion, temperatura, cantidad, empleadoRut, particularCodigo, empresaCodigo) VALUES ('$fechaRecepcion', '$temperatura', '$cantidad', '$empleadoRut', '$particularCodigo', '$empresaCodigo')";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function editar($id, $fechaRecepcion, $temperatura, $cantidad, $empleadoRut, $particularCodigo, $empresaCodigo){
            $db = new DB();
            $query = "UPDATE AnalisisMuestra SET fechaRecepcion = '$fechaRecepcion', temperatura = '$temperatura', cantidad = '$cantidad', empleadoRut = '$empleadoRut', particularCodigo = '$particularCodigo',empresaCodigo = '$empresaCodigo' WHERE id = $id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        public function eliminar($id){
            $db = new DB();
            $query = "DELETE FROM AnalisisMuestra WHERE id = $id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }

        public function buscarXId(){
            $db = new DB();
            $query = "SELECT id,fechaRecepcion, temperatura, cantidad, empleadoRut, particularCodigo, empresaCodigo FROM AnalisisMuestra WHERE id = '$this->id'";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            
            $AnalisisMuestra = new AnalisisMuestra();
            foreach($rs as $fila){
                $AnalisisMuestra->setId($fila["id"]);
                $AnalisisMuestra->setFechaRecepcion($fila["fechaRecepcion"]);    
                $AnalisisMuestra->setTemperatura($fila["temperatura"]);    
                $AnalisisMuestra->setCantidad($fila["cantidad"]);
                $AnalisisMuestra->setEmpleadoRut($fila["empleadoRut"]);
                $AnalisisMuestra->setParticularCodigo($fila["particularCodigo"]);
                $AnalisisMuestra->setEmpresaCodigo($fila["empresaCodigo"]);
            }
            return $AnalisisMuestra;
        } 
}