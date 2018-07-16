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
            $query = "SELECT id, fecha_recepcion , temperatura, cantidad, empleado_rut , particular_codigo , empresa_codigo  FROM analisis_muestra";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            foreach($rs as $fila){
                $AnalisisMuestras[] = new AnalisisMuestra($fila["id"],$fila["fecha_recepcion"],$fila["temperatura"],$fila["cantidad"],$fila["empleado_rut"],$fila["particular_codigo"],$fila["empresa_codigo"]);
            }
            return $AnalisisMuestras;
        }
        
        public function crear($id, $fechaRecepcion, $temperatura, $cantidad, $empleadoRut, $particularCodigo, $empresaCodigo){
            $db = new DB();
            $query = "INSERT INTO analisis_muestra (fecha_recepcion, temperatura, cantidad, empleado_rut, particular_codigo, empresa_codigo) VALUES ('$fechaRecepcion', '$temperatura', '$cantidad', '$empleadoRut', '$particularCodigo', '$empresaCodigo')";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function editar($id, $fechaRecepcion, $temperatura, $cantidad, $empleadoRut, $particularCodigo, $empresaCodigo){
            $db = new DB();
            $query = "UPDATE analisis_muestra SET fecha_recepcion = '$fechaRecepcion', temperatura = '$temperatura', cantidad = '$cantidad', empleado_rut = '$empleadoRut', particular_codigo = '$particularCodigo',empresa_codigo = '$empresaCodigo' WHERE id = $id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        public function eliminar($id){
            $db = new DB();
            $query = "DELETE FROM analisis_muestra WHERE id = $id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }

        public function buscarXId(){
            $db = new DB();
            $query = "SELECT id,fecha_recepcion, temperatura, cantidad, empleado_rut, particular_codigo, empresa_codigo FROM analisis_muestra WHERE id = '$this->id'";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            
            $AnalisisMuestra = new AnalisisMuestra();
            foreach($rs as $fila){
                $AnalisisMuestra->setId($fila["id"]);
                $AnalisisMuestra->setFechaRecepcion($fila["fecha_recepcion"]);    
                $AnalisisMuestra->setTemperatura($fila["temperatura"]);    
                $AnalisisMuestra->setCantidad($fila["cantidad"]);
                $AnalisisMuestra->setEmpleadoRut($fila["empleado_rut"]);
                $AnalisisMuestra->setParticularCodigo($fila["particular_codigo"]);
                $AnalisisMuestra->setEmpresaCodigo($fila["empresa_codigo"]);
            }
            return $AnalisisMuestra;
        } 
        public function muestrasSinResultados()
        {
            $db = new DB();
            $query = "SELECT m.id,m.fecha_recepcion, m.temperatura, m.cantidad, m.empleado_rut, m.particular_codigo, m.empresa_codigo FROM analisis_muestra m LEFT JOIN analisis_resultado r on m.id = r.analisis_muestra_id WHERE r.id is null ";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            foreach($rs as $fila){
                $AnalisisMuestras[] = new AnalisisMuestra($fila["id"],$fila["fecha_recepcion"],$fila["temperatura"],$fila["cantidad"],$fila["empleado_rut"],$fila["particular_codigo"],$fila["empresa_codigo"]);
            }
            return $AnalisisMuestras;
        }

        
}