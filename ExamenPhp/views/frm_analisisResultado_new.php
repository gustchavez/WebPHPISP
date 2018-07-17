	<main class="main col">
				<div class="row">
					<div class="columna col-lg-7">
						<div class="widget nueva_entrada">
							<h3 class="titulo">Crear Analisis Resultado</h3>

							<form action="?accion=crear" method="post">							
								<input type="date" name="fecha" placeholder="Ingrese Fecha" required />
								<input type="number" name="ppm" placeholder="Ingrese PPM" required />
                                
                                <select name="estado">
						              <option value='0'>En Curso</option>
                                      <option value='1'>Finalizado</option>
	            				</select>
                                
                                <select name="analisisMuestra">
									<?php foreach ($analisMueSinResul as $item) {?>
						              <option value='<?php echo $item->getId(); ?>'><?php echo $item->getId(); ?></option>
						            <?php } ?>
	            				</select>
                                
								<select name="analisisTipo">
									<?php foreach ($tipos as $tipo) {?>
						              <option value='<?php echo $tipo->getId(); ?>'><?php echo $tipo->getNombre(); ?></option>
						            <?php } ?>
	            				</select>
                                
                                <input type="text" name="empleadoRut" value="<?php echo $analisisResultado->getEmpleadoRut(); ?>" hidden />
                                
								<div class="d-flex justify-content-end">
									<button><i class="icon icon-edit"></i> Crear </button>
								</div>
							</form>
						</div>
					</div>

					<div class="columna col-lg-5">				
						<div class="widget comentarios">
							<div class="contenedor">
								<div class="comentario d-flex flex-wrap">
									<div class="foto">										
										<img src="../../WebPHPISP/views/images/comp.jpg">
										<p style="text-align: justify;">	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea accusantium, explicabo. Deleniti veritatis officiis similique suscipit officia quae tempora, modi quibusdam consectetur sint dignissimos aperiam quasi repellat aspernatur enim atque.</p>
									</div>				
								</div>		
							</div>
						</div>
					</div>
				</div>
	</main>