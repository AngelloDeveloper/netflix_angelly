<?php
  include('conexion.php');

  $busqueda = $_POST['busqueda'];

  if(!empty($busqueda)) {
    $query = "SELECT refCod,  monRef FROM  referencia WHERE refCod 
    LIKE '%$busqueda%'";
    
    $consulta = mysqli_query($conexion, $query);
    if(!$consulta) {
        die('Error de Consulta'. mysqli_error($conexion));
    }
    $json = array();
    while($row = mysqli_fetch_array($consulta)){
        $json[] = array(
            'refCod' => $row['refCod'],
            'monRef' =>$row['monRef']
        );
    }
    $jsonString = json_encode($json);
    echo $jsonString;
  }
?>