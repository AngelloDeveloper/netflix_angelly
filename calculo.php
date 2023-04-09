<?php
include('conexion.php');
    $nombre = $_POST['nomPro'];
    $taza = $_POST['taza'];
    $monto = $_POST['bolivares'];
    $date = $_POST['date'];
    $banco = $_POST['banco'];   
    $divisa = $_POST['divisa'];
    #$result = $taza * $monto;
    switch ($divisa) {
      case '1':
          $result = $taza * $monto;
        break;
      case '2':
          $result = $monto / $taza;
        break;
      case '3':
          $result = $monto / $taza;
        break;
      case '4':
          $result = $monto;
        break;
      default:
      echo '
        <script>
          alert("ERROR");
          window.location = "cambio.php";
        </script>
      '; 
        break;
    }
    $sql = "INSERT INTO cambio VALUES(null,'$nombre','$taza', '$monto', '$date','$result','$banco','$divisa')";
    #die($sql);
    $query = mysqli_query($conexion, $sql); 

if ($query) {
    echo '
    <script>
      alert("cambio exitoso y registrada");
      window.location = "cambio.php";
    </script>
    ';   
      #header("Location: referencias.php");
  }else {
    echo '
    <script>
      alert("Problemas para registrar, todos los campos tienen que estar rellenos");
      window.location = "cambio.php";
    </script>
    ';
  }
    




?>