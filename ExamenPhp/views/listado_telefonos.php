<main class="main col">
				<div class="row">
					<div class="columna col-lg-7">
						<div class="widget nueva_entrada">
							<h3 class="titulo">Listado de Telefonos</h3>
							
								
																	
								<table border="1">	
									<tr>
										<td>Id</td>
										<td>Numero</td>
										<td>Particular Codigo</td>
										<td>Acciones</td>
									</tr>
									<?php foreach ($telefonos as $telefono){ ?>
									<tr>
										<td><?php echo $telefono->getId() ; ?></td>
										<td><?php echo $telefono->getNumero() ; ?></td>
										<td><?php echo $telefono->getParticularCodigo() ; ?></td>
								        
								        <td><a href="?accion=crudEditar&id=<?php echo $telefono->getId();?>">Edit</a>
								        - <a href="?accion=eliminar&id=<?php echo $telefono->getId();?>">Delete</a></td>
									</tr>
									<?php } ?>
								</table>
								<br/>
								<a href="?accion=crudIngreso&codigo=<?php echo $telefono->getParticularCodigo(); ?>">Nuevo telefono</a>
								<a href="manejadorParticular.php">Volver Particular</a>


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
