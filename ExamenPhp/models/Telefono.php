<?php
    require_once "DB.php";

    class Telefono{ 
        private $id, $numero, $particularCodigo;

        public function __construct($id=null, $numero=null, $particularCodigo=null)
        {  
            $this->id                = $id;
            $this->numero            = $numero;
            $this->particularCodigo  = $particularCodigo;
        }

        public function setId($id)
        {
            $this->id = $id;
        }
        public function getId()
        {
            return $this->id;
        }

        public function setNumero($numero)
        {
            $this->numero = $numero;
        }

        public function getNumero()
        {
            return $this->numero;
        }

        public function setParticularCodigo($particularCodigo)
        {
            $this->particularCodigo = $particularCodigo;
        }

        public function getParticularCodigo()
        {
            return $this->particularCodigo;
        }

        public function buscarTodas(){
            $db = new DB();
            $query = "SELECT id, numero, particular_codigo FROM Telefono";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            foreach($rs as $fila){
                $Telefonos[] = new Telefono($fila["id"],$fila["numero"],$fila["particular_codigo"]);
            }
            return $Telefonos;
        }
        
        public function buscarXId(){
            $db = new DB();
            $query = "SELECT id, numero, particular_codigo FROM Telefono WHERE id = $this->id";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            
            $Telefono = new Telefono();
            foreach($rs as $fila){
                $Telefono->setId($fila["id"]);    
                $Telefono->setNumero($fila["numero"]);    
                $Telefono->setParticularCodigo($fila["particular_codigo"]);
            }
            return $Telefono;
        }
        
        public function buscarXParticularCodigo(){
            $db = new DB();
            $query = "SELECT id, numero, particular_codigo FROM Telefono WHERE particular_codigo = $this->particularCodigo";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
                      
            foreach($rs as $fila){
                $Telefonos[] = new Telefono($fila["id"],$fila["numero"],$fila["particular_codigo"]);
            }          
            
            return $Telefonos;
        }
        
        public function crear(){
            $db = new DB();
            $query = "INSERT INTO Telefono (numero, particular_codigo) VALUES ('$this->numero', $this->particularCodigo)";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function editar(){
            $db = new DB();
            $query = "UPDATE Telefono SET numero = '$this->numero', particular_codigo = $this->particularCodigo WHERE id = $this->id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function eliminar(){
            $db = new DB();
            $query = "DELETE FROM Telefono WHERE id = $this->id";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
    }
?>