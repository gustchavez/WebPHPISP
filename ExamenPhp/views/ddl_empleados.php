<?php foreach ($empleados as $empleado){ ?>
    <option value='<?php echo $empleado->getRut(); ?>'><?php echo $empleado->getNombre(); ?></option>
<?php } ?>