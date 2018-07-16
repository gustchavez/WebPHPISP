<?php foreach ($particulares as $particular){ ?>
    <option value='<?php echo $particular->getCodigo(); ?>'><?php echo $particular->getNombre(); ?></option>
<?php } ?>