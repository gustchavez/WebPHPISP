
<?php
	require_once "DB.php";
    require_once "Habitacion.php";

    class Reserva {
    	private $id, $rut, $nombre, $ingreso;
        public $habitacion;
    	
    	public function __construct($id=null, 
                                    $rut=null, 
                                    $nombre=null, 
                                    $ingreso=null,
                                    $habitacion=null)
        {  
            $this->id = $id;
            $this->rut = $rut;
    	    $this->nombre = $nombre;
            $this->ingreso = $ingreso;
            $this->habitacion = $habitacion;
        }

        public function getId(){ return $this->id; }
        public function getRut(){ return $this->rut; }
        public function getNombre(){ return $this->nombre; }
        public function getIngreso(){ return $this->ingreso; }
        public function getHabitacion(){ return $this->habitacion; }
        
        public function setId($id){ $this->id = $id; }
        public function setRut($rut){ $this->rut = $rut; }
        public function setNombre($nombre){ $this->nombre = $nombre; }
        public function setIngreso($ingreso){ $this->ingreso = $ingreso; }
        public function setHabitacion($habitacion){ $this->habitacion = $habitacion; }
        
        public function crear(){
            $db = new DB();
            $query = "INSERT INTO reservas (rut,nombre,ingreso,id_habitacion) VALUES (?,?,NOW(),?)";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->bindParam(1, $this->getRut());
            $sentencia->bindParam(2, $this->getNombre());
            $sentencia->bindParam(3, $this->habitacion->getNumero());
            return $sentencia->execute();
        }

        public function buscarTodas(){
            $db = new DB();
            $query = "SELECT r.rut, r.nombre, r.ingreso, h.numero from reservas r
                      INNER JOIN habitaciones h
                      ON r.id_habitacion = h.id";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            foreach($rs as $fila){
                $habitacion = new Habitacion(NULL, $fila["numero"]);
        $reservas[] = new Reserva(NULL,$fila["rut"], $fila["nombre"], $fila["ingreso"], $habitacion);
            }
            return $reservas;
        }
    }
?>



