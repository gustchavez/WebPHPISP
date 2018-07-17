<main class="main col">
				<div class="row">
					<div class="columna col-lg-7">
						<div class="widget nueva_entrada">
							<h3 class="titulo">Listado de Particulares</h3>
							
								
									<table border="1">	
									<tr>
										<td>Codigo</td>
										<td>Rut</td>
										<td>Password</td>
										<td>Nombre</td>
										<td>Direccion</td>
										<td>Email</td>
										<td>Telefonos</td>
										<td>Analisis</td>
										<td>Acciones</td>
									</tr>
									<?php foreach ($particulares as $particular){ ?>
									<tr>
										<td><?php echo $particular->getCodigo()   ; ?></td>
										<td><?php echo $particular->getRut()      ; ?></td>
										<td><?php echo $particular->getPassword() ; ?></td>
										<td><?php echo $particular->getNombre()   ; ?></td>
										<td><?php echo $particular->getDireccion(); ?></td>
										<td><?php echo $particular->getEmail()    ; ?></td>
								        <td><a href="manejadorTelefono.php?accion=buscarTodas&codigo=<?php echo $particular->getCodigo();?>">Ver</a></td>
								        <td><a href="manejadorAnalisisMuestra.php?accion=buscarXParticular&codigo=<?php echo $particular->getCodigo();?>">Ver</a></td>
								        <td><a href="?accion=crudEditar&codigo=<?php echo $particular->getCodigo();?>">Edit</a>
								        - <a href="?accion=eliminar&codigo=<?php echo $particular->getCodigo();?>">Delete</a></td>
									</tr>
									<?php } ?>
								</table>
								<br/>
								<a href="?accion=crudIngreso">Nuevo Particular</a>



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
