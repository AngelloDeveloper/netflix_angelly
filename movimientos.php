<?php
  include('conexion.php');

  $query = "SELECT * FROM movimiento";
  $ejecutar = mysqli_query($conexion, $query);
  while ($fila = mysqli_fetch_array($ejecutar)) {
    echo "
    <option value='".$fila['idMov']."'>".$fila['typMov']."</option>
    ";
  }
?>