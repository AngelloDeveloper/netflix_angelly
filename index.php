<?php
  include('conexion.php'); 
  
  $alert = '';
  session_start();

  if (!empty($_SESSION['active'])) {
    header("Location: referencias.php");
  }else{
  
        if (!empty($_POST)) {
            // echo $alert = 'Ingresar usuario y clave';  
            if (empty($_POST['user']) || empty($_POST['pass'])) {
            
                $alert = 'Ingresar usuario y clave';    
            }
            else {
                require_once('conexion.php'); 

                $user = mysqli_real_escape_string($conexion, $_POST['user']);
                $password = md5(mysqli_real_escape_string($conexion, $_POST['pass']));
                // echo $password;exit;
                
                $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE userName = '$user' AND userPass = '$password'");
                
                $result= mysqli_num_rows($query);

                    if ($result > 0) {
                        $data = mysqli_fetch_array($query);
                        
                        $_SESSION['active'] = true;
                        $_SESSION['idUser'] = $data['idUser'];
                        $_SESSION['user'] = $data['userName'];

                        header("Location: referencias.php");
            //        echo 'Bienvenido: '.$user;
                    }
                    else {
                        $alert = 'Error al ingresar tus datos';
                        session_destroy();
                    }
                }

        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Proyecto_Netflix</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!--<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

     Custom styles for this template-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-danger">
    

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <br><br><br><br><br>
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">¡Bienvenido de nuevo!</h1>
                                    </div>
                                    <form action="index.php" method="post" class="user">
                                        <div class="form-group">
                                            <input type="text" name="user" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Ingrese su Usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="password"  name="pass" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Contraseña">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recuérdame</label>
                                            </div>
                                        </div>
                                        <div class='alert'><?php echo isset($alert)?$alert:'';?></div>
                                        <input type="submit" name="sesion" value="ingresar" class="btn btn-danger btn-user btn-block">
                                        <!--a href="index.html" class="btn btn-primary btn-user btn-block">
                                            Ingresar
                                        </a-->
                                        <hr>
                                        <!--a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a-->
                                    </form>
                                    <!--hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
