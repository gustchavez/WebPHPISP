	<main class="main col">
				<div class="row">
					<div class="columna col-lg-7">
						<div class="widget nueva_entrada">
							<h3 class="titulo">Crear Analisis Resultado</h3>

							<form action="?accion=crear" method="post">
							
								<input type="text" name="fecha" placeholder="Ingrese Fecha" />
								<input type="text" name="ppm" placeholder="Ingrese PPM" />
								<input type="text" name="estado" placeholder="Ingrese Estado" />
								<input type="text" name="analisisMuestra" placeholder="Ingrese Analisis de Muestra" />
								<select name="analisisTipo">
									<?php foreach ($tipos as $tipo) {?>
						              <option value='<?php echo $tipo->getId(); ?>'><?php echo $tipo->getNombre(); ?></option>
						            <?php } ?>
	            				</select>
	            				<select name="empleadoRut">
									<?php foreach ($emplRuts as $emplRut) {?>
						              <option value='<?php echo $emplRut->getRut(); ?>'><?php echo $emplRut->getNombre(); ?></option>
						            <?php } ?>
	            				</select>


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
										<img src="images/comp.jpg">
										<p style="text-align: justify;">	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea accusantium, explicabo. Deleniti veritatis officiis similique suscipit officia quae tempora, modi quibusdam consectetur sint dignissimos aperiam quasi repellat aspernatur enim atque.</p>
									</div>				
								</div>		
							</div>
						</div>
					</div>
				</div>
	</main>