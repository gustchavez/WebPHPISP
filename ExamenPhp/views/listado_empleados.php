<main class="main col">
				<div class="row">
					<div class="columna col-lg-7">
						<div class="widget nueva_entrada">
							<h3 class="titulo">Listado de Empleados</h3>

								
								<table border="1">	
									<tr>
										<td>Rut</td>
										<td>Nombre</td>
										<td>Password</td>
										<td>Categoria</td>
										<td>Acciones</td>
									</tr>
									<?php foreach ($empleados as $empleado){ ?>
									<tr>
										<td><?php echo $empleado->getRut()      ; ?></td>
										<td><?php echo $empleado->getNombre()   ; ?></td>
										<td><?php echo $empleado->getPassword() ; ?></td>
										<td><?php   if ($empleado->getCategoria()       == "A") {
								                        echo "Administrador";
								                    } elseif ($empleado->getCategoria() == "R") {
								                        echo "Recepcionasta Muestra";
								                    } elseif ($empleado->getCategoria() == "T") {
								                        echo "Tecnico Analista";
								                    } else {
								                             "Sin Categoria";
								                    }
								                    ?>
								        </td>
								        
								        <td><a href="?accion=crudEditar&rut=<?php echo $empleado->getRut();?>">Edit</a>
								        - <a href="?accion=eliminar&rut=<?php echo $empleado->getRut();?>">Delete</a></td>
									</tr>
									<?php } ?>
								</table>
								<br/>
								<a href="?accion=crudIngreso">Nuevo Empleado</a>


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

