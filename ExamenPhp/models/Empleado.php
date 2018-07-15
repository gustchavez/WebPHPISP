<?php
require_once "DB.php";

class Empleado
{

    private $rut;

    private $nombre;

    private $password;

    private $categoria;

    public function __construct($rut=null, $nombre=null, $password=null, $categoria=null)
    {  
        $this->rut    = $rut;
        $this->nombre       = $nombre;
        $this->password  = $password;
        $this->categoria    = $categoria;
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

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }


    $rut, $nombre, $password, $categoria
    Empleado

    public function buscarTodas(){
            $db = new DB();
            $query = "SELECT rut, nombre, password, categoria FROM Empleado";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            foreach($rs as $fila){
                $Empleado[] = new Empleado($fila["rut"],$fila["nombre"],$fila["password"],$fila["categoria"]);
            }
            return $Empleado;
        }
        
        public function crear($rut, $nombre, $password, $categoria){
            $db = new DB();
            $query = "INSERT INTO Empleado (nombre, password, categoria) VALUES ('$nombre', '$password', '$categoria')";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function editar($rut, $nombre, $password, $categoria){
            $db = new DB();
            $query = "UPDATE Empleado SET nombre = '$nombre', password = '$password', categoria = '$categoria' WHERE id = $id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        public function eliminar($id){
            $db = new DB();
            $query = "DELETE FROM Empleado WHERE id = $id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
}
