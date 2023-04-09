<?php
  include('conexion.php'); 

  $ref = $_POST['ref'];
  $date = $_POST['date'];
  $monto = $_POST['monto'];
  $banco = $_POST['select'];

  
    //verificar
      $ver_sql = "SELECT * FROM  referencia WHERE refCod = '$ref'";
      $ver_query =  mysqli_query($conexion, $ver_sql);

        if (mysqli_num_rows($ver_query) > 0) {
          echo '<script> 
                alert("Transferencia, ya existe o se encuentra en papelera de reciclaje");
                window.location = "referencias.php";
            </script>';
            exit();
        }else {
          $sql = "INSERT INTO referencia (`refCod`, `dateRef`,`monRef`,`idBan`,`status`)
   VALUES('$ref', '$date', '$monto','$banco', 1)";
  
  $query = mysqli_query($conexion, $sql);
          echo '
          <script>
            alert("referencia registrada");
            window.location = "referencias.php";
          </script>
          ';   
            #header("Location: referencias.php");
        }
  
  
  
  mysqli_close($conexion);
 

   
?>