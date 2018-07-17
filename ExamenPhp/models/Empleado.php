<?php
require_once "DB.php";

class Empleado
    {
        private $rut, $nombre, $password, $categoria;

        public function __construct($rut=null, $nombre=null, $password=null, $categoria=null)
        {  
            $this->rut       = $rut;
            $this->nombre    = $nombre;
            $this->password  = $password;
            $this->categoria = $categoria;
        }

        public function setRut($rut)
        {
            $this->rut = $rut;
        }
        public function getRut()
        {
            return $this->rut;
        }
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        public function getNombre()
        {
            return $this->nombre;
        }
        public function setPassword($password)
        {
            $this->password = $password;
        }
        public function getPassword()
        {
            return $this->password;
        }
        public function setCategoria($categoria)
        {
            $this->categoria = $categoria;
        }
        public function getCategoria()
        {
            return $this->categoria;
        }

        public function buscarTodas(){
            $db = new DB();
            $query = "SELECT rut, nombre, password, categoria FROM Empleado";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            $Empleados=[];
            foreach($rs as $fila){
                $Empleados[] = new Empleado($fila["rut"],$fila["nombre"],$fila["password"],$fila["categoria"]);
            }
            return $Empleados;
        }
        
        public function buscarXRut(){
            $db = new DB();
            $query = "SELECT rut, nombre, password, categoria FROM Empleado WHERE rut = '$this->rut'";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            
            $Empleado = new Empleado();
            foreach($rs as $fila){
                $Empleado->setRut($fila["rut"]);    
                $Empleado->setNombre($fila["nombre"]);    
                $Empleado->setPassword($fila["password"]);
                $Empleado->setCategoria($fila["categoria"]);
            }
            return $Empleado;
        }
        
        public function buscarXCategoria(){
            $db = new DB();
            $query = "SELECT rut, nombre, password, categoria FROM Empleado WHERE categoria = '$this->categoria'";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
             $Empleados=[];
            foreach($rs as $fila){
                $Empleados[] = new Empleado($fila["rut"],$fila["nombre"],$fila["password"],$fila["categoria"]);
            }
            return $Empleados;
        }
        
        public function crear(){
            $db = new DB();
            $query = "INSERT INTO Empleado (rut, nombre, password, categoria) VALUES ('$this->rut', '$this->nombre', '$this->password', '$this->categoria')";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function editar(){
            $db = new DB();
            $query = "UPDATE Empleado SET nombre = '$this->nombre', password = '$this->password', categoria = '$this->categoria' WHERE rut = $this->rut";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function eliminar(){
            $db = new DB();
            $query = "DELETE FROM Empleado WHERE rut = $this->rut";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
    }
?>