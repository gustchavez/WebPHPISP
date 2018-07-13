<?php 

	require_once "../modelo/Comuna.php";
	require_once "../modelo/Sismo.php";

	class ComunaControlador
	{
		
		public $comuna;	

		public function __construct()  
	    {  
	        $this->comuna = new Comuna();
	    } 

		public function crear($nombre=null){

			$this->comuna->setNombre($nombre);

			if($this->comuna->crear($nombre)){

				echo "Comuna ingresada correctamente <br/>";
			}
			else{
				echo "No se pudo ingresar Comuna <br/>";
			}
		}

		public function modificar($id=null, $nombre=null)
		{
			if($this->comuna->modificar($id,$nombre)){

				echo "Comuna Modificada correctamente <br/>";
			}
			else{
				echo "No se pudo Modificada la Comuna <br/>";
			}
		}
	}
	
	class SismoControlador
	{
		
		public $sismo;	

		public function __construct()  
	    {  
	        $this->sismo = new Sismo();
	    } 	

		public function crear($fechaEvento=null,  
                                    $profundidad=null,
                                    $descripcion=null,
                                    $intensidad =null){

			$this->sismo->setFechaEvento($fechaEvento);
			$this->sismo->setProfundidad($profundidad);	
			$this->sismo->setDescripcion($descripcion);	
			$this->sismo->setIntensidad($intensidad);	

			if($this->sismo->crear($fechaEvento,  
                                    $profundidad,
                                    $descripcion,
                                    $intensidad )){
				echo "Sismo ingresada correctamente <br/>";
			}
			else{
				echo "No se pudo realizar la reserva <br/>";
			}
		}

		public function mostrarFormularioIngreso(){
		}

		public function buscarTodas(){
			$sismo = $this->sismo->buscarTodas();
		}
		public function eliminarPorId($id=null,$idComuna=null){			
			$sismo = $this->sismo->eliminarPorId($id,$idComuna);
			return $sismo;
		}
		public function modificar($id = null,
									$fechaEvento=null,  
                                    $profundidad=null,
                                    $descripcion=null,
                                    $intensidad =null){

			$this->sismo->setFechaEvento($fechaEvento);
			$this->sismo->setProfundidad($profundidad);	
			$this->sismo->setDescripcion($descripcion);	
			$this->sismo->setIntensidad($intensidad);	

			if($this->sismo->modificar($id,$fechaEvento,$profundidad,$descripcion,$intensidad)){
				echo "Sismo modificar correctamente <br/>";
			}
			else{
				echo "No se pudo modificar la Sismo <br/>";
			}
		}
	}

 ?>