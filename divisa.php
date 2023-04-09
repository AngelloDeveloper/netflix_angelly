<?php
  include('conexion.php');

  $query = "SELECT * FROM divisa";
  $ejecutar = mysqli_query($conexion, $query);
  while ($fila = mysqli_fetch_array($ejecutar)) {
    echo "
    <option value='".$fila['idDiv']."'>".$fila['typDiv']."</option>
    ";
  }
  // $query = "SELECT ban.`refBan`, ref.`idRef` FROM `banca` ban
  // INNER JOIN referencia ref
  // ON ban.refBan = ref.idRef
  // ";
  // $ejecutar = mysqli_query($conexion, $query);
  // if ($ejecutar = true) {
  //     echo '
  //     <li class="btn btn-danger">
  //     confirmado
  //   </li>
  //     ';
  // }else {
  //   echo '<a class="btn btn-danger insert-item" href="#" data-toggle="modal" data-target="#logoutModal">
  //     Registrar
  //   </a>';
  // }
?>
