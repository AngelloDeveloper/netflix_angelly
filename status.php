<?php
  include('conexion.php'); 

  $id = $_GET['idBank'];
  $status = $_GET['status'];

  $sql = "UPDATE banca SET status =$status WHERE idBank=$id";
  
  $query = mysqli_query($conexion, $sql);
   if ($query) {
        echo '
        <script>
        alert("cambios realizados con exito");
        window.location = "confirnacion.php";
        </script>
        ';     
      }
  
  
?>