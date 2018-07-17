<main class="main col">
				<div class="row">
					<div class="columna col-lg-7">
						<div class="widget nueva_entrada">
							<h3 class="titulo">Listado de Analisis Resultado</h3>

							
									<table border="1">	
									<tr>
										<td>Fecha</td>
										<td>Ppm</td>
										<td>Estado</td>
										<td>Analisis Muestra</td>
										<td>Analisis Tipo</td>
										<td>Empleado Rut</td>
										<td>Grafico</td>
										<td>Acciones</td>
									</tr>
									<?php foreach ($analisisResultados as $analisisResultado){ ?>
									<tr>
										<td><?php echo $analisisResultado->getFecha(); ?></td>
										<td><?php echo $analisisResultado->getPpm()      ; ?></td>
										<td><?php echo $analisisResultado->getEstado()      ; ?></td>
										<td><?php echo $analisisResultado->getAnalisisMuestra()      ; ?></td>
										<td><?php echo $analisisResultado->getAnalisisTipo() ; ?></td>
										<td><?php echo $analisisResultado->getEmpleadoRut() ; ?></td>
										<td><a href="manejadorAnalisisResultado.php?accion=graficoResultado&id=<?php echo $analisisResultado->getAnalisisMuestra();?>">Ver</a></td>
								        
								        <td><a href="?accion=crudEditar&id=<?php echo $analisisResultado->getId();?>">Edit</a>
								        - <a href="?accion=eliminar&id=<?php echo $analisisResultado->getId();?>">Delete</a></td>
									</tr>
									<?php } ?>
								</table>
								<br/>
								<a href="?accion=crudIngreso">Nuevo Analisis</a>


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
