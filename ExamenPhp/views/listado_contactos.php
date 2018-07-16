<main class="main col">
				<div class="row">
					<div class="columna col-lg-7">
						<div class="widget nueva_entrada">
							<h3 class="titulo">Listado de Contactos</h3>

								
								<table border="1">	
									<tr>
										<td>Rut</td>
										<td>Nombre</td>
										<td>Email</td>
										<td>Telefono</td>
										<td>Empresa Codigo</td>
										<td>Acciones</td>
									</tr>
									<?php foreach ($contactos as $contacto){ ?>
									<tr>
										<td><?php echo $contacto->getRut()   ; ?></td>
										<td><?php echo $contacto->getNombre()      ; ?></td>
										<td><?php echo $contacto->getEmail()      ; ?></td>
										<td><?php echo $contacto->getTelefono()      ; ?></td>
										<td><?php echo $contacto->getEmpresaCodigo() ; ?></td>
								        
								        <td><a href="?accion=crudEditar&rut=<?php echo $contacto->getRut();?>">Edit</a>
								        - <a href="?accion=eliminar&rut=<?php echo $contacto->getRut();?>">Delete</a></td>
									</tr>
									<?php } ?>
								</table>
								<br/>
								<a href="?accion=crudIngreso&codigo=<?php echo $contacto->getEmpresaCodigo(); ?>">Nuevo Contacto</a>
								<a href="manejadorEmpresa.php">Volver Empresa</a>


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
