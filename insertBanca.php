<?php
  include('conexion.php'); 

  $banco = $_POST['select'];
  $ref = $_POST['refBan'];
  $date = $_POST['dateBan'];
  $movi = $_POST['selectMov'];
  $monto = $_POST['monBan'];
  $descrip = $_POST['descrip'];

  if (validar($ref, $conexion) == 1) {
    echo '<script> 
      alert("referencia, ya existe");
      window.location = "banca.php";
      </script>';
  }
  else {
    if ($movi == 1) {
      $sql = "INSERT INTO `banca`(`idBank`, `dateBan`, `entBan`, `salBan`, `desBan`, `idBan`, `idMov`,`status`) 
      VALUES ('$ref', '$date', '$monto',null,'$descrip','$banco','$movi', 0)";
    }else {
        $sql = "INSERT INTO `banca`(`idBank`, `dateBan`, `entBan`, `salBan`, `desBan`, `idBan`, `idMov`,`status`)
        VALUES ('$ref', '$date', null, '$monto','$descrip','$banco','$movi', 0)";
    }
    $query = mysqli_query($conexion, $sql);
    if ($query) {
      echo '
      <script>
        alert("referencia registrada");
        window.location = "banca.php";
      </script>
      '; 
    }
  }
  
  function validar($refe, $conex){
    $ver_sql = "SELECT * FROM banca WHERE idBank = '$refe'";
    $ver_query =  mysqli_query($conex, $ver_sql);

      if (mysqli_num_rows($ver_query) > 0) {
        return 1;
      }
      else {
        return 0;
      }
  }

 

mysqli_close($conexion);
 

   
?>