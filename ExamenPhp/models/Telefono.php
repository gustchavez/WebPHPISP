<?php
require_once "DB.php";

class Telefono
{
 
    private $id;

    private $numero;

    private $particularCodigo;

    public function __construct($id=null, $numero=null, $particularCodigo=null)
    {  
        $this->id    = $id;
        $this->numero       = $numero;
        $this->particularCodigo  = $particularCodigo;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getNumero()
    {
        return $this->numero;
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

    $id=null, $numero=null, $particularCodigo=null
    Telefono

    public function buscarTodas(){
            $db = new DB();
            $query = "SELECT id, numero, particularCodigo FROM Telefono";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            foreach($rs as $fila){
                $Telefono[] = new Telefono($fila["id"],$fila["numero"],$fila["particularCodigo"]);
            }
            return $Telefono;
        }
        
        public function crear($id, $numero, $particularCodigo){
            $db = new DB();
            $query = "INSERT INTO Telefono (numero, particularCodigo) VALUES ('$numero', '$particularCodigo'";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function editar($id, $numero, $particularCodigo){
            $db = new DB();
            $query = "UPDATE Telefono SET numero = '$numero', particularCodigo = '$particularCodigo' WHERE id = $id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        public function eliminar($id){
            $db = new DB();
            $query = "DELETE FROM Telefono WHERE id = $id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
}
