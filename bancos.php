<?php
  include('conexion.php');

  $query = "SELECT * FROM banco";
  $ejecutar = mysqli_query($conexion, $query);
  while ($fila = mysqli_fetch_array($ejecutar)) {
    echo "
    <option value='".$fila['idBan']."'>".$fila['typBan']."</option>
    ";
  }
?>