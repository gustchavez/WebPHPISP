<?php
require_once "DB.php";

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

        public function setId($id)
        {
            $this->id = $id;

            return $this;
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

        public function buscarTodas(){
            $db = new DB();
            $query = "SELECT id, fecha, ppm, estado, analisis_muestra_id , analisis_tipo_id , empleado_rut  FROM analisis_resultado";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            $AnalisisResultados=[];
            foreach($rs as $fila){
                $AnalisisResultados[] = new AnalisisResultado($fila["id"],$fila["fecha"],$fila["ppm"],$fila["estado"],$fila["analisis_muestra_id"],$fila["analisis_tipo_id"],$fila["empleado_rut"]);
            }
            return $AnalisisResultados;
        }
        
        public function buscarXParticular($codigo){
            $db = new DB();
            $query = "SELECT ar.id, ar.fecha, ar.ppm, ar.estado, ar.analisis_muestra_id , ar.analisis_tipo_id , ar.empleado_rut  FROM analisis_resultado ar, analisis_muestra am WHERE ar.analisis_muestra_id = am.id AND am.particular_codigo = $codigo";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            $AnalisisResultados=[];
            foreach($rs as $fila){
                $AnalisisResultados[] = new AnalisisResultado($fila["id"],$fila["fecha"],$fila["ppm"],$fila["estado"],$fila["analisis_muestra_id"],$fila["analisis_tipo_id"],$fila["empleado_rut"]);
            }
            return $AnalisisResultados;
        }
        
        public function buscarXEmpresa($codigo){
            $db = new DB();
            $query = "SELECT ar.id, ar.fecha, ar.ppm, ar.estado, ar.analisis_muestra_id , ar.analisis_tipo_id , ar.empleado_rut  FROM analisis_resultado ar, analisis_muestra am WHERE ar.analisis_muestra_id = am.id AND am.empresa_codigo = $codigo";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            $AnalisisResultados=[];
            foreach($rs as $fila){
                $AnalisisResultados[] = new AnalisisResultado($fila["id"],$fila["fecha"],$fila["ppm"],$fila["estado"],$fila["analisis_muestra_id"],$fila["analisis_tipo_id"],$fila["empleado_rut"]);
            }
            return $AnalisisResultados;
        }
        
        public function crear(){
            $db = new DB();
            $query = "INSERT INTO analisis_resultado (fecha, ppm, estado, analisis_muestra_id, analisis_tipo_id, empleado_rut) VALUES (STR_TO_DATE('$this->fecha', '%Y-%m-%d'), $this->ppm, $this->estado, $this->analisisMuestra, $this->analisisTipo, $this->empleadoRut)";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function editar(){
            $db = new DB();
            $query = "UPDATE analisis_resultado SET fecha = STR_TO_DATE('$this->fecha', '%Y-%m-%d'), ppm = $this->ppm, estado = $this->estado, analisis_muestra_id = $this->analisisMuestra, analisis_tipo_id = $this->analisisTipo, empleado_rut = $this->empleadoRut WHERE id = $this->id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        public function eliminar(){
            $db = new DB();
            $query = "DELETE FROM analisis_resultado WHERE id = $this->id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }

        public function buscarXId(){
            $db = new DB();
            $query = "SELECT id,fecha, ppm, estado, analisis_muestra_id, analisis_tipo_id, empleado_rut FROM analisis_resultado WHERE id = '$this->id'";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            
            $AnalisisResultado = new AnalisisResultado();
            foreach($rs as $fila){
                $AnalisisResultado->setId($fila["id"]);
                $AnalisisResultado->setFecha($fila["fecha"]);    
                $AnalisisResultado->setPpm($fila["ppm"]);    
                $AnalisisResultado->setEstado($fila["estado"]);
                $AnalisisResultado->setAnalisisMuestra($fila["analisis_muestra_id"]);
                $AnalisisResultado->setAnalisisTipo($fila["analisis_tipo_id"]);
                $AnalisisResultado->setEmpleadoRut($fila["empleado_rut"]);
            }
            return $AnalisisResultado;
        } 

        public function graficoXId()
        {
            $db = new DB();
            $query="SELECT analisis_tipo.nombre,analisis_resultado.ppm FROM analisis_tipo join analisis_resultado on analisis_tipo.id = analisis_resultado.analisis_tipo_id WHERE analisis_resultado.analisis_muestra_id = '$this->id' ";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            $json = [];
            foreach($rs as $fila){
                $json[]= [(string)$fila["nombre"], (int)$fila["ppm"]];
            }
            return $json;
        }

        public function reporTecnicoXResultado(){
            $db = new DB();
            $query = "SELECT em.rut, em.nombre, em.categoria, ti.nombre as tipo , re.analisis_muestra_id,re.fecha , re.ppm, re.estado FROM empleado em JOIN analisis_resultado re on em.rut = re.empleado_rut JOIN analisis_tipo ti on re.analisis_tipo_id= ti.id WHERE em.categoria='T' ORDER BY re.fecha DESC";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            $lista = [];
            foreach($rs as $fila){
                $lista[] = [(string)$fila["rut"],(string)$fila["nombre"],(string)$fila["categoria"],(string)$fila["tipo"],(string)$fila["analisis_muestra_id"],(string)$fila["fecha"],(string)$fila["ppm"],(string)$fila["estado"]];
            }
            return $lista;
        }
    }
?>