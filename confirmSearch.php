<?php
  include('conexion.php');

  $busqueda = $_POST['busqueda'];


  if(!empty($busqueda)) {
    $query = "SELECT bank.idBank, bank.dateBan, bank.refBan,bank.entBan,bank.status, ban.typBan 
    FROM banca bank
    INNER join banco ban
    ON bank.idBan = ban.idBan
    WHERE bank.refBan
    LIKE '%$busqueda%'";

    $consulta = mysqli_query($conexion, $query);
    if(!$consulta) {
        die('Error de Consulta'. mysqli_error($conexion));
    }

    $json = array();
    while($row = mysqli_fetch_array($consulta)){
        $json[] = array(
            'refBan' => $row['refBan'],
            'typBan' => $row['typBan'],
            'dateBan' => $row['dateBan'],
            'entBan' => $row['entBan']
        );
    }
    $jsonString = json_encode($json);
    echo $jsonString;
  }
?>