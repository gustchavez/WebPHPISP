<?php
require_once "DB.php";

class AnalisisTipo
    {
        private $id, $nombre;

        public function __construct($id=null, $nombre=null)
        {  
            $this->id      = $id;
            $this->nombre  = $nombre;
        }
        
        public function setId($id)
        {
            $this->id = $id;
        }
        public function getId()
        {
            return $this->id;
        }
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        public function getNombre()
        {
            return $this->nombre;
        }

        public function buscarTodas(){
            $db = new DB();
            $query = "SELECT id, nombre FROM Analisis_Tipo";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            $AnalisisTipos=[];
            foreach($rs as $fila){
                $AnalisisTipos[] = new AnalisisTipo($fila["id"], $fila["nombre"]);
            }
            return $AnalisisTipos;
        }
        
        public function buscarXId(){
            $db = new DB();
            $query = "SELECT id, nombre FROM Analisis_Tipo WHERE id = $this->id";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
                        
            $AnalisisTipo = new AnalisisTipo();
            foreach($rs as $fila){
                $AnalisisTipo->setId($fila["id"]);
                $AnalisisTipo->setNombre($fila["nombre"]);
            }
            return $AnalisisTipo;
        }
            
        public function crear(){
            $db = new DB();
            $query = "INSERT INTO Analisis_Tipo (nombre) VALUES ('$this->nombre')";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
            
        public function editar(){
            $db = new DB();
            $query = "UPDATE Analisis_Tipo SET nombre = '$this->nombre' WHERE id = $this->id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function eliminar(){
            $db = new DB();
            $query = "DELETE FROM Analisis_Tipo WHERE id = $this->id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
    }
?>