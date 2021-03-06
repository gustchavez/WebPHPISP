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
            $AnalisisMuestras=[];
            foreach($rs as $fila){
                $AnalisisMuestras[] = new AnalisisMuestra($fila["id"],$fila["fecha_recepcion"],$fila["temperatura"],$fila["cantidad"],$fila["empleado_rut"],$fila["particular_codigo"],$fila["empresa_codigo"]);
            }
            return $AnalisisMuestras;
        }
        
        public function crear(){
            $db = new DB();
            $query = "INSERT INTO analisis_muestra (fecha_recepcion, temperatura, cantidad, empleado_rut, particular_codigo, empresa_codigo) VALUES ( STR_TO_DATE('$this->fechaRecepcion', '%Y-%m-%d'), $this->temperatura, $this->cantidad, '$this->empleadoRut', $this->particularCodigo, $this->empresaCodigo)";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function crearE(){
            $db = new DB();
            $query = "INSERT INTO analisis_muestra (fecha_recepcion, temperatura, cantidad, empleado_rut, particular_codigo, empresa_codigo) VALUES ( STR_TO_DATE('$this->fechaRecepcion', '%Y-%m-%d'), $this->temperatura, $this->cantidad, '$this->empleadoRut', NULL, $this->empresaCodigo)";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function crearP(){
            $db = new DB();
            $query = "INSERT INTO analisis_muestra (fecha_recepcion, temperatura, cantidad, empleado_rut, particular_codigo, empresa_codigo) VALUES ( STR_TO_DATE('$this->fechaRecepcion', '%Y-%m-%d'), $this->temperatura, $this->cantidad, '$this->empleadoRut', $this->particularCodigo, NULL)";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function editar(){
            $db = new DB();
            $query = "UPDATE analisis_muestra SET fecha_recepcion = STR_TO_DATE('$this->fechaRecepcion', '%Y-%m-%d'), temperatura = $this->temperatura, cantidad = $this->cantidad, empleado_rut = '$this->empleadoRut', particular_codigo = $this->particularCodigo, empresa_codigo = $this->empresaCodigo WHERE id = $this->id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        public function eliminar(){
            $db = new DB();
            $query = "DELETE FROM analisis_muestra WHERE id = $this->id";
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
        
        public function buscarXParticular(){
            $db = new DB();
            $query = "SELECT id, fecha_recepcion, temperatura, cantidad, empleado_rut, particular_codigo, empresa_codigo FROM analisis_muestra WHERE particular_codigo = $this->particularCodigo";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            $AnalisisMuestras=[];
            $AnalisisMuestra = new AnalisisMuestra();
            foreach($rs as $fila){
                $AnalisisMuestras[] = new AnalisisMuestra($fila["id"],$fila["fecha_recepcion"],$fila["temperatura"],$fila["cantidad"],$fila["empleado_rut"],$fila["particular_codigo"],$fila["empresa_codigo"]);
            }
            return $AnalisisMuestras;
        } 
        
        public function buscarXEmpresa(){
            $db = new DB();
            $query = "SELECT id, fecha_recepcion, temperatura, cantidad, empleado_rut, particular_codigo, empresa_codigo FROM analisis_muestra WHERE empresa_codigo = $this->empresaCodigo";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            //
            $AnalisisMuestras = [];
            //
            foreach($rs as $fila){
                $AnalisisMuestras[] = new AnalisisMuestra($fila["id"],$fila["fecha_recepcion"],$fila["temperatura"],$fila["cantidad"],$fila["empleado_rut"],$fila["particular_codigo"],$fila["empresa_codigo"]);
            }
            
            return $AnalisisMuestras;
        } 
        
        public function muestrasSinResultados()
        {
            $db = new DB();
            $query = "SELECT m.id,m.fecha_recepcion, m.temperatura, m.cantidad, m.empleado_rut, m.particular_codigo, m.empresa_codigo FROM analisis_muestra m LEFT JOIN analisis_resultado r on m.id = r.analisis_muestra_id WHERE r.id is null ";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            $AnalisisMuestras=[]; 
            foreach($rs as $fila){
                $AnalisisMuestras[] = new AnalisisMuestra($fila["id"],$fila["fecha_recepcion"],$fila["temperatura"],$fila["cantidad"],$fila["empleado_rut"],$fila["particular_codigo"],$fila["empresa_codigo"]);
            }
            return $AnalisisMuestras;
        }

        public function reporRecepcionXMuestra(){
            $db = new DB();
            $query = "SELECT em.rut as rutEmp, em.nombre as nmbEmpl, em.categoria, mu.fecha_recepcion, mu.temperatura , emp.nombre as nombEmpre, em.rut as rutEmpre , pa.nombre nmbPart, pa.rut as rutPart FROM empleado em JOIN analisis_muestra mu on em.rut = mu.empleado_rut JOIN empresa emp on mu.empresa_codigo = emp.codigo JOIN particular pa on mu.particular_codigo = pa.codigo WHERE em.categoria='R'";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            $lista = [];
            foreach($rs as $fila){
                $lista[] = [(string)$fila["rutEmp"],(string)$fila["nmbEmpl"],(string)$fila["categoria"],(string)$fila["fecha_recepcion"],(string)$fila["temperatura"],(string)$fila["nombEmpre"],(string)$fila["rutEmpre"],(string)$fila["nmbPart"],(string)$fila["rutPart"]];
            }
            return $lista;
        }
    }
?>