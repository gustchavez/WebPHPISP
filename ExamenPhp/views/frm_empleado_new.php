<main class="main col">
				<div class="row">
					<div class="columna col-lg-7">
						<div class="widget nueva_entrada">
							<h3 class="titulo">Crear Empleado</h3>

							<form action="?accion=crear" method="post">
							
								<input type="text" name="rut" placeholder="Ingrese Rut" />
								<input type="text" name="nombre" placeholder="Ingrese Nombres" />
								<input type="text" name="password" placeholder="Ingrese Password" />

								<select name="categoria">
				                  <option value="A">Administrador</option>
				                  <option value="R">Recepcionasta Muestra</option>
				                  <option value="T">Tecnico Analista</option>
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




