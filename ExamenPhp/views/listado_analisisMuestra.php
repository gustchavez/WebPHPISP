<main class="main col">
				<div class="row">
					<div class="columna col-lg-7">
						<div class="widget nueva_entrada">
							<h3 class="titulo">Listado de Analisis Muestra</h3>

							
									<table border="1">	
									<tr>
										<td>Fecha Recepcion</td>
										<td>Temperatura</td>
										<td>Cantidad</td>
										<td>Empleado Rut</td>
										<td>Particular Codigo</td>
										<td>Empresa Codigo</td>
										<td>Acciones</td>
									</tr>
									<?php foreach ($analisisMuestras as $analisisMuestra){ ?>
									<tr>
										<td><?php echo $analisisMuestra->getFechaRecepcion()   ; ?></td>
										<td><?php echo $analisisMuestra->getTemperatura()      ; ?></td>
										<td><?php echo $analisisMuestra->getCantidad()      ; ?></td>
										<td><?php echo $analisisMuestra->getEmpleadoRut()      ; ?></td>
										<td><?php echo $analisisMuestra->getParticularCodigo() ; ?></td>
										<td><?php echo $analisisMuestra->getEmpresaCodigo() ; ?></td>
								        
								        <td><a href="?accion=crudEditar&id=<?php echo $analisisMuestra->getId();?>">Edit</a>
								        - <a href="?accion=eliminar&id=<?php echo $analisisMuestra->getId();?>">Delete</a></td>
									</tr>
									<?php } ?>
								</table>
								<br/>
								<a href="?accion=crudIngresoP&rut=<?php echo $am->getEmpleadoRut();?>">Nuevo Analisis Particular</a>
								<a href="?accion=crudIngresoE&rut=<?php echo $am->getEmpleadoRut();?>">Nuevo Analisis Empresa</a>
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
