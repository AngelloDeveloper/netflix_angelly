<?php
  include('conexion.php'); 
  
  #ELIMINADO FISICO
  if(isset($_GET['refCod'])){
    $refCod = $_GET['refCod'];
    $query = "UPDATE `referencia` SET `status`= 0 WHERE refCod = $refCod";
    $result = mysqli_query($conexion,$query);
    if (!$result) {
        die('Query Failed');
    }

    echo '
    <script>
      alert("Transferencia se envió a papelera de reciclaje con Exito");
      window.location = "referencias.php";
    </script>
    '; 
  #ELIMINADO LOGICO  
//   if(isset($_GET['refCod'])){
//     $refCod = $_GET['refCod'];
//     $query = "DELETE FROM referencia where refCod = $refCod";
//     $result = mysqli_query($conexion,$query);
//     if (!$result) {
//         die('Query Failed');
//     }

//     echo '
//     <script>
//       alert("Transferencia Eliminada con Exito");
//       window.location = "referencias.php";
//     </script>
//     '; 

}
 

   
?>