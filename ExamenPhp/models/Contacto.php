<?php
require_once "DB.php";

class Contacto
    {
        private $rut, $nombre, $email, $telefono, $empresaCodigo;

        public function __construct($rut=null, $nombre=null, $email=null, $telefono=null, $empresaCodigo=null)
        {  
            $this->rut           = $rut;
            $this->nombre        = $nombre;
            $this->email         = $email;
            $this->telefono      = $telefono;
            $this->empresaCodigo = $empresaCodigo;
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
        public function setEmail($email)
        {
            $this->email = $email;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function setTelefono($telefono)
        {
            $this->telefono = $telefono;
        }
        public function getTelefono()
        {
            return $this->telefono;
        }

        public function setEmpresaCodigo($empresaCodigo)
        {
            $this->empresaCodigo = $empresaCodigo;
        }

        public function getEmpresaCodigo()
        {
            return $this->empresaCodigo;
        }

        public function buscarTodas(){
            $db = new DB();
            $query = "SELECT rut, nombre, email, telefono, empresa_codigo FROM Contacto";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            foreach($rs as $fila){
                $Contactos[] = new Contacto($fila["rut"],$fila["nombre"],$fila["email"],$fila["telefono"],$fila["empresa_codigo"]);
            }
            return $Contactos;
        }
        
        public function buscarXRut(){
            $db = new DB();
            $query = "SELECT rut, nombre, email, telefono, empresa_codigo FROM Contacto WHERE rut = '$this->rut'";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            
            $Contacto = new Contacto();
            foreach($rs as $fila){
                $Contacto->setRut($fila["rut"]);    
                $Contacto->setNombre($fila["nombre"]);    
                $Contacto->setEmail($fila["email"]);
                $Contacto->setTelefono($fila["telefono"]);
                $Contacto->setEmpresaCodigo($fila["empresa_codigo"]);
            }
            return $Contacto;
        }        
        
        public function buscarXEmpresaCodigo(){
            $db = new DB();
            $query = "SELECT rut, nombre, email, telefono, empresa_codigo FROM Contacto WHERE empresa_codigo = $this->empresaCodigo";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            foreach($rs as $fila){
                $Contactos[] = new Contacto($fila["rut"],$fila["nombre"],$fila["email"],$fila["telefono"],$fila["empresa_codigo"]);
            }
            return $Contactos;
        }
        
        public function crear(){
            $db = new DB();
            $query = "INSERT INTO Contacto ( rut, nombre, email, telefono, empresa_codigo) VALUES ('$this->rut', '$this->nombre', '$this->email', '$this->telefono', $this->empresaCodigo)";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function editar(){
            $db = new DB();
            $query = "UPDATE Contacto SET nombre = '$this->nombre', email = '$this->email', telefono = '$this->telefono', empresa_codigo = $this->empresaCodigo WHERE rut = '$this->rut'";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function eliminar(){
            $db = new DB();
            $query = "DELETE FROM Contacto WHERE rut = '$this->rut'";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
    }
?>