
<?php
	require_once "DB.php";

    class Habitacion {
    	private $id, $numero;
    	
    	public function __construct($id=null, $numero=null)
        {  
            $this->id = $id;
            $this->numero = $numero;
        }

        public function getId(){ return $this->id; }
        public function getNumero(){ return $this->numero; }
        
        public function setId($id){ $this->id = $id; }
        public function setNumero($numero){ $this->numero = $numero; }

        public function buscarTodas(){
            $db = new DB();
            $query = "SELECT id, numero from habitaciones";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            foreach($rs as $fila){
                $habitaciones[] = new Habitacion($fila["id"],$fila["numero"]);
            }
            return $habitaciones;
        }
        public function crear(){}
        public function editar(){}
        public function eliminar(){}
    }
?>



