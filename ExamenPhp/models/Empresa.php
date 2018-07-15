<?php
require_once "DB.php";

class Empresa
    {
        private $codigo, $rut, $nombre, $password, $direccion;

        public function __construct($codigo=null, $rut=null, $nombre=null, $password=null, $direccion=null)
        {  
            $this->codigo    = $codigo;
            $this->rut       = $rut;
            $this->nombre    = $nombre;
            $this->password  = $password;
            $this->direccion = $direccion;
        }

        public function setCodigo($codigo) {
            $this->codigo = $codigo;
        }
        public function getCodigo() {
            return $this->codigo;
        }
        public function setRut($rut) {
            $this->rut = $rut;
        }
        public function getRut() {
            return $this->rut;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        public function getNombre() {
            return $this->nombre;
        }
        public function setPassword($password) {
            $this->password = $password;
        }
        public function getPassword() {
            return $this->password;
        }
        public function setDireccion($direccion) {
            $this->direccion = $direccion;
        }
        public function getDireccion() {
            return $this->direccion;
        }

        public function buscarTodas() {
            $db = new DB();
            $query = "SELECT codigo, rut, nombre, password, direccion FROM Empresa";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            foreach($rs as $fila){
                $Empresas[] = new Empresa($fila["codigo"],$fila["rut"],$fila["nombre"],$fila["password"],$fila["direccion"]);
            }
            return $Empresas;
        }
        
        public function buscarXCodigo() {
            $db = new DB();
            $query = "SELECT codigo, rut, nombre, password, direccion FROM Empresa WHERE codigo = $this->codigo";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            $Empresa = new Empresa();
            foreach($rs as $fila){
				$Empresa->setCodigo($fila["codigo"]);    
				$Empresa->setRut($fila["rut"]);    
				$Empresa->setNombre($fila["nombre"]);
				$Empresa->setPassword($fila["password"]);
				$Empresa->setDireccion($fila["direccion"]);
            }
            return $Empresa;
        }
        
        public function crear(){
            $db = new DB();
            $query = "INSERT INTO Empresa (rut, nombre, password, direccion) VALUES ('$this->rut', '$this->nombre', '$this->password', '$this->direccion')";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function editar(){
            $db = new DB();
            $query = "UPDATE Empresa SET rut = '$this->rut', nombre = '$this->nombre', password = '$this->password', direccion = '$this->direccion' WHERE codigo = $this->codigo";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function eliminar(){
            $db = new DB();
            $query = "DELETE FROM Empresa WHERE codigo = $this->codigo";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
    }
?>