<?Php
    require_once('DB.php');
     //from here we select the table and display records of table using while loop
    $db = new DB();
    $query="SELECT analisis_tipo.nombre,analisis_resultado.ppm FROM analisis_tipo join analisis_resultado on analisis_tipo.id = analisis_resultado.analisis_tipo_id ORDER BY analisis_resultado.id";
    $sentencia = $db->getConexion()->prepare($query);
    $sentencia->execute();
    $rs= $sentencia->fetchAll();
    $json = [];
    foreach($rs as $fila){
        $json[]= [(string)$fila["nombre"], (int)$fila["ppm"]];
    }
    echo json_encode($json);
?>