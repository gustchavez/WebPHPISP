
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
            $this->direccion = $numero;
            $this->email     = $email;
        }

        public function getCodigo()            { return $this->codigo   ; }
        public function getRut()               { return $this->rut      ; }
        public function getPassword()          { return $this->password ; }
        public function getNombre()            { return $this->nombre   ; }
        public function getDireccion()         { return $this->direccion; }
        public function getEmail()             { return $this->email    ; }
        
        public function setCodigo($codigo)     { $this->codigo    = $codigo   ; }
        public function setRut($rut)           { $this->rut       = $rut      ; }
        public function setPassword($password) { $this->password  = $password ; }
        public function setNombre($nombre)     { $this->nombre    = $nombre   ; }
        public function setDireccion$direccion){ $this->direccion = $direccion; }
        public function setEmail($email)       { $this->email     = $email    ; }

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
        
        public function crear($codigo, $rut, $password, $nombre, $direccion, $email){
            $db = new DB();
            $query = "INSERT INTO Particular (codigo, rut, password, nombre, direccion, email) VALUES ($codigo, '$rut', '$password', '$nombre', '$direccion', '$email')";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        
        public function editar($codigo, $rut, $password, $nombre, $direccion, $email){
            $db = new DB();
            $query = "UPDATE Particular SET rut = '$rut', password = '$password', nombre = '$nombre', direccion = '$direccion', email = '$email' WHERE codigo = $codigo";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
        public function eliminar($codigo){
            $db = new DB();
            $query = "DELETE FROM Particular WHERE rut = '$rut', password = '$password', nombre = '$nombre', direccion = '$direccion', email = '$email' WHERE codigo = $codigo";
            $sentencia = $db->getConexion()->prepare($query);
            $respuesta = $sentencia->execute();
            return $respuesta;
        }
    }
?>



