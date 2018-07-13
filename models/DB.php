
	<?php  

		class DB
		{				
			private $conexion;
			function __construct()
			{
				try{
					$this->conexion = new PDO('mysql:host=localhost;dbname=hotelmvc', 'root', '');
				}
				catch(PDOException $e){
			    	$this->conexion = null;
				}
			}
			function getConexion(){
				return $this->conexion;			
			}
		}

	?>



	