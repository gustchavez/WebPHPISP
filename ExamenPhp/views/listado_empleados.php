<h1>Listado de Empleados</h1>	

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