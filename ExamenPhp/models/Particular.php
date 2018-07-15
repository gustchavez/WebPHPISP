
<?php
	require_once "DB.php";

    class Particular {
    	private $codigo, $rut, $password, $nombre, $direccion, $email;
    	
    	public function __construct($codigo=null, $rut=null, $password=null, $nombre=null, $direccion=null, $email=null)
        {  
            $this->codigo    = $codigo;
            $this->rut       = $rut;
            $this->password  = $password;
            $this->nombre    = $nombre;
            $this->direccion = $direccion;
            $this->email     = $email;
        }

        public function getCodigo() { 
            return $this->codigo   ; 
        }
        public function getRut() {
            return $this->rut      ; 
        }
        public function getPassword() {
            return $this->password ; 
        }
        public function getNombre() { 
            return $this->nombre   ;
        }
        public function getDireccion() {
            return $this->direccion;
        }
        public function getEmail() {
            return $this->email    ;
        }
        
        public function setCodigo($codigo) {
            $this->codigo    = $codigo   ;
        }
        public function setRut($rut) {
            $this->rut       = $rut      ;
        }
        public function setPassword($password) {
            $this->password  = $password ;
        }
        public function setNombre($nombre) {
            $this->nombre    = $nombre   ; 
        }
        public function setDireccion($direccion) { 
            $this->direccion = $direccion; 
        }
        public function setEmail($email) { 
            $this->email     = $email    ; 
        }

        public function buscarTodas(){
            $db = new DB();
            $query = "SELECT codigo, rut, password, nombre, direccion, email FROM Particular";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            foreach($rs as $fila){
                $Particulares[] = new Particular($fila["codigo"],$fila["rut"],$fila["password"],$fila["nombre"],$fila["direccion"],$fila["email"]);
            }
            return $Particulares;
        }
        
        public function buscarXCodigo(){
            $db = new DB();
            $query = "SELECT codigo, rut, password, nombre, direccion, email FROM Particular WHERE codigo = $this->codigo";
            $sentencia = $db->getConexion()->prepare($query);
            $sentencia->execute();
            $rs= $sentencia->fetchAll();
            $Particular = new Particular();
            foreach($rs as $fila){
				$Particular->setCodigo($fila["codigo"]);    
				$Particular->setRut($fila["rut"]);    
				$Particular->setPassword($fila["password"]);
				$Particular->setNombre($fila["nombre"]);
				$Particular->setDireccion($fila["direccion"]);
				$Particular->setEmail($fila["email"]);
            }
            return $Particular;
        }
        
        public function crear(){
            $db = new DB();
            $query = "INSERT INTO Particular (rut, password, nombre, direccion, email) VALUES ( '$this->rut', '$this->password', '$this->nombre', '$this->direccion', '$this->email')";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function editar(){
            $db = new DB();
            $query = "UPDATE Particular SET rut = '$this->rut', password = '$this->password', nombre = '$this->nombre', direccion = '$this->direccion', email = '$this->email' WHERE codigo = $this->codigo";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function eliminar(){
            $db = new DB();
            $query = "DELETE FROM Particular WHERE codigo = $this->codigo";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
    }
?>



