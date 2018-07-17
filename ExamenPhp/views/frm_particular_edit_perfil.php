<main class="main col">
				<div class="row">
					<div class="columna col-lg-7">
						<div class="widget nueva_entrada">
							<h3 class="titulo">Editar Particular</h3>

							<form action="?accion=editarPerfil" method="post">
							
								<input type="number" name="codigo" value="<?php echo $particular->getCodigo(); ?>" readonly />
								<input type="text" name="rut" value="<?php echo $particular->getRut(); ?>" required/>
								<input type="password" name="password" value="<?php echo $particular->getPassword(); ?>" required/>
								<input type="text" name="nombre" value="<?php echo $particular->getNombre(); ?>" required/>
								<input type="text" name="direccion" value="<?php echo $particular->getDireccion(); ?>" required/>
								<input type="email" name="email" value="<?php echo $particular->getEmail(); ?>" required/>
	

								<div class="d-flex justify-content-end">
									<button><i class="icon icon-edit"></i> Editar </button>
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