<?php
require_once "DB.php";

class Contacto
{
    private $rut;

    private $nombre;

    private $email;

    private $telefono;

    private $empresaCodigo;

    public function __construct($rut=null, $nombre=null, $email=null, $telefono=null, $empresaCodigo=null)
    {  
        $this->rut    = $rut;
        $this->nombre       = $nombre;
        $this->email  = $email;
        $this->telefono    = $telefono;
        $this->empresaCodigo = $empresaCodigo;
    }

    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    public function getRut()
    {
        return $this->rut;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getTelefono()
    {
        return $this->telefono;
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
            $query = "SELECT rut, nombre, email, telefono, empresaCodigo FROM Contacto";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            foreach($rs as $fila){
                $Contacto[] = new Contacto($fila["rut"],$fila["nombre"],$fila["email"],$fila["telefono"],$fila["empresaCodigo"]);
            }
            return $Contacto;
        }
        
        public function crear($rut, $nombre, $email, $telefono, $empresaCodigo){
            $db = new DB();
            $query = "INSERT INTO Contacto (nombre, email, telefono, empresaCodigo) VALUES ('$nombre', '$email', '$telefono', '$empresaCodigo')";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function editar($rut, $nombre, $email, $telefono, $empresaCodigo){
            $db = new DB();
            $query = "UPDATE Contacto SET nombre = '$nombre', email = '$email', telefono = '$telefono', empresaCodigo = '$empresaCodigo' WHERE id = $id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        public function eliminar($id){
            $db = new DB();
            $query = "DELETE FROM Contacto WHERE id = $id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
}
