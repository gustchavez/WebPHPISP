<?php
require_once "DB.php";

class AnalisisTipo
{
   
    private $id;

    private $nombre;

    public function __construct($id=null, $nombre=null)
    {  
        $this->id    = $id;
        $this->nombre       = $nombre;
    }
    public function getId()
    {
        return $this->id;
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

    public function buscarTodas(){
        $db = new DB();
        $query = "SELECT id, nombre FROM AnalisisTipo";
        $sentencia = $db->getConexion()->prepare($query);
        $sentencia->execute();
        $rs= $sentencia->fetchAll();
        foreach($rs as $fila){
            $AnalisisTipo[] = new AnalisisTipo($fila["id"],$fila["nombre"]);
        }
        return $AnalisisTipo;
    }
        
    public function crear($id, $nombre){
        $db = new DB();
        $query = "INSERT INTO AnalisisTipo (nombre) VALUES ('$nombre')";
        $sentencia = $db->getConexion()->prepare($query);
        $respuesta = $sentencia->execute();
        return $respuesta;
    }
        
    public function editar($id, $nombre){
        $db = new DB();
        $query = "UPDATE AnalisisTipo SET nombre = '$nombre' WHERE id = $id";
        $sentencia = $db->getConexion()->prepare($query);
        $respuesta = $sentencia->execute();
        return $respuesta;
    }
    public function eliminar($id){
        $db = new DB();
        $query = "DELETE FROM AnalisisTipo WHERE id = $id";
        $sentencia = $db->getConexion()->prepare($query);
        $respuesta = $sentencia->execute();
        return $respuesta;
    }
}
