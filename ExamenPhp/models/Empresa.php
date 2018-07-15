<?php
require_once "DB.php";

class Empresa
{

    private $codigo;

    private $rut;

    private $nombre;

    private $password;

    private $direccion;

    public function __construct($codigo=null, $rut=null, $nombre=null, $password=null, $direccion=null)
    {  
        $this->codigo    = $codigo;
        $this->rut       = $rut;
        $this->nombre  = $nombre;
        $this->password    = $password;
        $this->direccion = $direccion;
    }

    public function getCodigo()
    {
        return $this->codigo;
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

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function buscarTodas(){
            $db = new DB();
            $query = "SELECT rut, nombre, codigo, password, direccion FROM Empresa";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            foreach($rs as $fila){
                $Empresa[] = new Empresa($fila["rut"],$fila["nombre"],$fila["codigo"],$fila["password"],$fila["direccion"]);
            }
            return $Empresa;
        }
        
        public function crear($rut, $nombre, $codigo, $password, $direccion){
            $db = new DB();
            $query = "INSERT INTO Empresa (nombre, codigo, password, direccion) VALUES ('$nombre', '$codigo', '$password', '$direccion')";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function editar($rut, $nombre, $codigo, $password, $direccion){
            $db = new DB();
            $query = "UPDATE Empresa SET nombre = '$nombre', codigo = '$codigo', password = '$password', direccion = '$direccion' WHERE rut = $rut";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        public function eliminar($rut){
            $db = new DB();
            $query = "DELETE FROM Empresa WHERE rut = $rut";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
}
