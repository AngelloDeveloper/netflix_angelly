<?php
  include('conexion.php'); 

  $desc = $_POST['desc'];
  $date = $_POST['date'];
  $monto = $_POST['monto'];
  $banco = $_POST['select'];

  $sql = "INSERT INTO gastoref (`descGas`, `dateGas`,`monGas`,`idBan`,`status`) VALUES('$desc', '$date', '$monto','$banco',0)";
  
  $query = mysqli_query($conexion, $sql);
  
echo 'registrado';

  // if ($query) {
  //   echo '
  //   <script>
  //     alert("gasto registrado");
  //     window.location = "gastos.php";
  //   </script>
  //   ';   
  //     #header("Location: referencias.php");
  // }else {
  //   //verificar
  //     $ver_sql = "SELECT * FROM  gastoref WHERE gasCod = '$id'";
  //     $ver_query =  mysqli_query($conexion, $ver_sql);

  //       if (mysqli_num_rows($ver_query) > 0) {
  //         echo '<script> 
  //               alert("referencia, ya existe");
  //               window.location = "gastos.php";
  //           </script>';
  //           exit();
  //       }
        
  // }
  
  
  mysqli_close($conexion);
 

   
?>