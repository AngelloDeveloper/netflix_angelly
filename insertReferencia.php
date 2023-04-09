<?php
  include('conexion.php'); 

  $ref = $_POST['referencia'];
  $date = $_POST['date'];
  $monto = $_POST['monto'];
  $movi = $_POST['movimiento'];
  $banco = $_POST['banco'];

  
 
      if($sql = true){
        $up = "UPDATE `excel` SET status = 1 WHERE refExc =  $ref";
      }

      if ($movi == 1) {
        $sql = "INSERT INTO referencia (`refCod`, `dateRef`,`monRef`,`idBan`,`status`) VALUES('$ref', '$date', '$monto','$banco', 1)";



        
        
      }else {
        $sql = "INSERT INTO `gastoref`(`gasCod`, `dateGas`, `monGas`, `idBan`, `status`)  VALUES('$ref', '$date', '$monto','$banco', 1)";
      }
  
  
  $result = mysqli_query($conexion, $up);
  $query = mysqli_query($conexion, $sql);
  
  
  if ($query) {
    echo '
    <script>
      alert("referencia registrada");
      window.location = "banca.php";
    </script>
    '; 
  }
  

mysqli_close($conexion);

?>