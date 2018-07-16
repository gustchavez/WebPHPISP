<?php foreach ($empresas as $empresa){ ?>
    <option value='<?php echo $empresa->getCodigo(); ?>'><?php echo $empresa->getNombre(); ?></option>
<?php } ?>