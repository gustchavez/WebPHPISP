			<main class="main col">
				<div class="row">
					<div class="columna col-lg-7">
						<div class="widget nueva_entrada">
							<h3 class="titulo">Editar Analisis Muestra</h3>

							<form action="?accion=editar" method="post">
							
								<input type="text" name="id"  value="<?php echo $analisisMuestra->getId(); ?>" readonly />
								<input type="date" name="fechaRecepcion" value="<?php echo $analisisMuestra->getFechaRecepcion(); ?>"/>
								<input type="text" name="temperatura" value="<?php echo $analisisMuestra->getTemperatura(); ?>"/>
								<input type="text" name="cantidad" value="<?php echo $analisisMuestra->getCantidad(); ?>"/>
								<input type="text" name="empleadoRut" value="<?php echo $analisisMuestra->getEmpleadoRut(); ?>"/>
								<input type="text" name="particularCodigo" value="<?php echo $analisisMuestra->getParticularCodigo(); ?>"/>
								<input type="text" name="empresaCodigo" value="<?php echo $analisisMuestra->getEmpresaCodigo(); ?>"/>

								<div class="d-flex justify-content-end">
									<button><i class="icon icon-edit"></i> Editar</button>
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
