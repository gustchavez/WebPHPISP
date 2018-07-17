<main class="main col">
				<div class="row">
					<div class="columna col-lg-7">
						<div class="widget nueva_entrada">
							<h3 class="titulo">Reporte Tecnicos por Resulados</h3>

							<table border="1">	
								<tr>
									<td>RUT</td>
									<td>NOMBRE</td>
									<td>CATEGORIA</td>
									<td>Analisis TIPO</td>
									<td>Analisis MUESTRA</td>
									<td>FECHA</td>
									<td>PPM</td>
									<td>ESTADO</td>
								</tr>
								<?php for ($i=0; $i < count($result) ; $i++) { ?>
								<tr>
									<td><?php echo $result[$i][0]; ?></td>
									<td><?php echo $result[$i][1]; ?></td>
									<td><?php echo $result[$i][2]; ?></td>
									<td><?php echo $result[$i][3]; ?></td>
									<td><?php echo $result[$i][4]; ?></td>
									<td><?php echo $result[$i][5]; ?></td>
									<td><?php echo $result[$i][6]; ?></td>
									<td><?php echo $result[$i][7]; ?></td>
							        
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



