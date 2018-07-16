			<main class="main col">
				<div class="row">
					<div class="columna col-lg-7">
						<div class="widget nueva_entrada">
							<h3 class="titulo">Crear Analisis Muestra</h3>

							<form action="?accion=crear" method="post">
							
								<input type="date" name="fechaRecepcion" placeholder="Ingrese Fecha de Recepcion" />
								<input type="text" name="temperatura" placeholder="Ingrese la Temperatura" />
								<input type="text" name="cantidad" placeholder="Ingrese Cantidad" />
								<select name="empleadoRut">
				                    <?php  
				                        require_once "./controllers/EmpleadoController.php";
				                        $empleadoController = new EmpleadoController(); 
				                        $empleadoController->crearDDLXCategoria('R');
				                    ?>
				                </select>
				                <select name="particularCodigo">
							        <?php  
										require_once "./controllers/ParticularController.php";
										$particularController = new ParticularController(); 
										$particularController->crearDDL();
							        ?>
						        </select>
						        <select name="empresaCodigo">
					                <?php  
										require_once "./controllers/EmpresaController.php";
										$empresaController = new EmpresaController(); 
										$empresaController->crearDDL();
					                ?>
				                </select>



								<div class="d-flex justify-content-end">
									<button><i class="icon icon-edit"></i> Crear</button>
								</div>
							</form>
						</div>
					</div>

					<div class="columna col-lg-5">				
						<div class="widget comentarios">
							<div class="contenedor">
								<div class="comentario d-flex flex-wrap">
									<div class="foto">										
										<img src="images/comp.jpg">
										<p style="text-align: justify;">	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea accusantium, explicabo. Deleniti veritatis officiis similique suscipit officia quae tempora, modi quibusdam consectetur sint dignissimos aperiam quasi repellat aspernatur enim atque.</p>
									</div>				
								</div>		
							</div>
						</div>
					</div>
				</div>
			</main>