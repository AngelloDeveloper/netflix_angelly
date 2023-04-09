<?php
  include('conexion.php'); 
  session_start();
  
  if (empty($_SESSION['active'])) {
    header("Location: index.php");
  } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
   
    <title>Referencias</title>
     <!-- Custom fonts for this template-->
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!--<link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">-->

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</head>
 
<body id="page-top">
    
<!-- Page Wrapper -->
<div id="wrapper">

      <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="referencias.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">¡Bienvenido!</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <!-- <li class="nav-item active">
            <a class="nav-link" href="dashboard.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li> -->

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading
        <div class="sidebar-heading">
            Referencias
        </div>-->

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-asterisk"></i>
                <!--i class="fas fa-fw fa-cog"></i-->
                <span>Referencias</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="referencias.php">Registro</a>
                    <a class="collapse-item" href="consultaRef.php">Consulta semanal  <br>y mensual</a>
                    <a class="collapse-item" href="gastos.php">Gastos</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Calculadora</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="cambio.php">Cambio</a>
                    <!--a class="collapse-item" href="utilities-border.html">Borders</a>
                    <a class="collapse-item" href="utilities-animation.html">Animations</a>
                    <a class="collapse-item" href="utilities-other.html">Other</a-->
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <!--div class="sidebar-heading">
            Addons
        </div-->
        <!-- Divider -->
        <!--hr class="sidebar-divider d-none d-md-block"-->

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Bancos</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="registroBancario.php">Registro Bancario</a>
                    <a class="collapse-item" href="confirmacionExcel.php">Estados de cuenta</a>
                    <a class="collapse-item" href="porBanco.php">Estado según el Banco</a>
                    <!--a class="collapse-item" href="register.html">Register</a>
                    <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Other Pages:</h6>
                    <a class="collapse-item" href="404.html">404 Page</a>
                    <a class="collapse-item" href="blank.html">Blank Page</a-->
                </div>
            </div>
        </li>
        <!-- Divider -->
        <!--hr class="sidebar-divider d-none d-md-block"-->

        <!-- Nav Item - Charts -->
        <li class="nav-item">
                <a class="nav-link" href="banca.php">
                    <!-- <i class="fas fa-fw fa-chart-area"></i> -->
                    <i class="fas fa-fw fa-table"></i>
                <span>Confirmación Estados bancarios</span></a>
            </li>

        <!-- Divider -->
        <!--hr class="sidebar-divider d-none d-md-block"-->

        <!-- Nav Item - Tables -->
        <!--li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li-->

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        <!--div class="sidebar-card d-none d-lg-flex">
            <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
            <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
            <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
        </div-->

    </ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Search -->
<form
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Bucador..."
            aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-danger" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Buscar..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-danger" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>

    <!-- Nav Item - Alerts -->
    <!--li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts >
            <span class="badge badge-danger badge-counter">3+</span>
        </a-->
        <!-- Dropdown - Alerts -->
        <!--div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
                Alerts Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-danger">
                        <i class="fas fa-file-alt text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                    <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
        </div>
    </li-->

    <!-- Nav Item - Messages -->
    <!--li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i-->
            <!-- Counter - Messages >
            <span class="badge badge-danger badge-counter">7</span>
        </a-->
        <!-- Dropdown - Messages -->
        <!--div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
                Message Center
            </h6>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_1.svg"
                        alt="...">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a
                        problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_2.svg"
                        alt="...">
                    <div class="status-indicator"></div>
                </div>
                <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how
                        would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="img/undraw_profile_3.svg"
                        alt="...">
                    <div class="status-indicator bg-warning"></div>
                </div>
                <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with
                        the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                        alt="...">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                        told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
        </div>
    </li-->

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Master</span>
            <img class="img-profile rounded-circle"
                src="img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <!--a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a-->
            <!--a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Settings
            </a-->
            <a class="dropdown-item" href="backup/backup.php">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                BackUp BD
            </a-->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Cerrar Sesión
            </a>
            
        </div>
    </li>

</ul>

</nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">                    
                    
                        <h1 class="h3 mb-0 text-gray-800">Confirmación de Referencias</h1>
                    
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> 
                        Generar informe</a>
                </div>

                <!-- Content Row -->
                <div class="row">              
                    <div class="col-md-4">                       
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-danger">Buscador de Referencias</h6>
                            </div>
                            <div class="card-body">
                                <form name="banca.php" method="get">
                                    <!-- <input type="date" class="form-control mb-3" name="date1" required>
                                    <input type="date" class="form-control mb-3" name="date2" required> -->
                                    <label>Bancos</label>
                                            <select class="form-control mb-3" name="select" id="select" required>
                                                <option value="0">Seleccionar</option>
                                                <?php include('bancos.php');?>
                                            </select>
                                    <input  type="search" class="form-control mb-3" name="busqueda" id="busqueda" placeholder="ingresar referencia" pattern="[0-9]+" required>
                                    <input type="submit" name="enviar" value="Buscar" class="btn btn-danger">
                                    
                                </form> 
                                
                            </div>
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-danger">resultado de consulta</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Referencia</th>
                                                <th>Monto</th>
                                                <th>Referencias o gastos</th>
                                            </tr>
                                        </thead>
                                        <tbody id="busquedas">
                                           
                                           <?php
                                                if (isset($_GET['enviar'])) {
                                                    $busqueda = $_GET['busqueda'];                                                    
                                                        #referencias    
                                                    $sqlR= "SELECT  `refCod`, `monRef`,`status` FROM `referencia`
                                                            WHERE refCod LIKE '%$busqueda%'
                                                           ";
                                                    $consulta = mysqli_query($conexion, $sqlR);
                                                    while($row = mysqli_fetch_array($consulta)){

                                                         ?>
                                                        <tr>
                                                            <td><?php echo $row['refCod']; ?></td>
                                                            <td><?php echo $row['monRef']; ?></td>
                                                            <td>
                                                                <a class="btn btn-danger" href="referencias.php">                                                                                                                                                    
                                                                    ir A referencias
                                                                </a>
                                                            </td>
                                                        <?php
                                                       
                                                    }

                                                    #gastos
                                                    $sqlG= "SELECT `gasCod`,`monGas`, `status` FROM `gastoref`
                                                        WHERE gasCod LIKE '%$busqueda%'
                                                        ";
                                                    $consulta = mysqli_query($conexion, $sqlG);
                                                    while($row = mysqli_fetch_array($consulta)){

                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['gasCod']; ?></td>
                                                            <td><?php echo $row['monGas']; ?></td>
                                                            <td>
                                                                <a class="btn btn-danger" href="gastos.php">                                                                                                                                                    
                                                                    ir A Gastos
                                                                </a>
                                                            </td>
                                                        <?php
                                                    }
                                                                                                                    
                                                        
                                                }

                                            ?>

                                        </tbody>
                                         <!-- Logout Modal CONFRIM-->
                                         <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">¿Listo para realizar tu registro?</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        
                                                            <form action="insertarBancaNuevo.php" method="post">
                                                                <div class="modal-body">
                                                                    <label>Bancos</label>
                                                                    <select class="form-control mb-3" name="select" id="select" required>
                                                                        <option value="0">Seleccionar</option>
                                                                        <?php include('bancos.php');?>
                                                                    </select>
                                                                    <input type="text" class="form-control mb-3" name="refBan" id="refBan" placeholder="Referencia" required pattern="[0-9]{4,30}" title="Ingresar 4 digitos">
                                                                    <input type="datetime-local" class="form-control mb-3" name="dateBan" placeholder="Fecha y Hora" required>
                                                                    <label>Movimientos</label>
                                                                    <select class="form-control mb-3" name="selectMov" id="select" required>
                                                                        <option value="0">Seleccionar</option>
                                                                        <?php include('movimientos.php');?>
                                                                    </select>
                                                                    <input type="text"  class="form-control mb-3" name="monBan" id="monBan" placeholder="Monto" step="any" required pattern="[0-9]{2.01,30.01}">                                   
                                                                    <textarea name="descrip" class="form-control mb-3"  placeholder="Descripción de movimiento" cols="10" rows="10"></textarea> 
                                                                                                                        
                                                            
                                                                </div>
                                                                    <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                                    <a href="insertar.php">
                                                                        <button class="btn btn-danger" type="submit">Aceptar</button>
                                                                    </a>
                                                                </div>
                                                            </form> 
                                                    </div>
                                                </div>
                                        </div> -->
                                    </table>
                                </div>
                            </div>
                        </div>                                       
                    </div>
                    <div class="col-md-7">                        
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-danger">Consulta</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>referencia</th>
                                                <th>Banco</th>
                                                <th>fecha y hora</th>
                                                <th>entrada</th>
                                                <th>salida</th>
                                                <th>Check</th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody id="busque" >
                                        <?php
                                        #buscador
                                        if (isset($_GET['enviar'])) {
                                            $busqueda = $_GET['busqueda']; 
                                            $busque = $_GET['select']; 
                                            // var_dump($busque,$busqueda);
                                            // die(); 

                                            $sql= "SELECT exc.refExc, exc.fchExc, exc.desExc, exc.entExc, exc.salExc, exc.status, ban.idBan, ban.typBan
                                            FROM excel exc
                                            INNER join banco ban
                                            ON exc.idBan = ban.idBan 
                                            WHERE exc.refExc
                                            LIKE '%$busqueda%' and ban.idBan = '$busque'";

                                            $consulta = mysqli_query($conexion, $sql);
                                            $sum = 0;
                                            
                                            while($row = mysqli_fetch_array($consulta)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['refExc'] ?></td>
                                                    <td><?php echo $row['typBan']?></td>
                                                    <td><?php echo $row['fchExc'] ?></td>
                                                    <td><?php echo $row['salExc'] ?></td>
                                                    <td><?php echo $row['entExc'] ?></td>
                                                    
                                                    <td>
                                                                
                                                            <?php
                                                    
                                                                 if ($row['status'] == 1) {
                                                        // echo $row['status'];
                                                            ?>
                                                                <a class="btn btn-primary">
                                                                    Confirmado
                                                                </a>
                                                                    
                                                    </td>       
                                                        <?php
                                                            // if (isset($sum)) {
                                                            //     $sum +=$row['monRef'];
                                                            //  }
                                                        
                                                        }
                                                        else {
                                                            ?>
                                                            <button type="button" id="btnmodal" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-ref="<?php echo $row['refExc']?>" data-ban="<?php echo $row['idBan']?>">
                                                            Pendiente
                                                            </button>
                                                            <script >
                                                                $(document).on("click", "#btnmodal",function () {
                                                                    
                                                                    var referencia =$(this).data('ref');
                                                                    var banco =$(this).data('ban');

                                                                    $("#referencia").val(referencia);
                                                                    $("#banco").val(banco);                                                                    
                                                                })
                                                            </script>
                                            <!-- Logout Modal CONFRIM-->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">¿Listo para realizar tu registro?</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        
                                                            <form action="insertReferencia.php" method="post">
                                                                <div class="modal-body">                                                                
                                                                    <input type="text" class="form-control mb-3" name="banco" id="banco" placeholder="Banco" required  title="ingresar banco">
                                                                    <input type="text" class="form-control mb-3" name="referencia" id="referencia" placeholder="Referencia" required pattern="[0-9]{4,30}" title="Ingresar codigo">
                                                                    <input type="datetime-local" class="form-control mb-3" name="date" placeholder="Fecha y Hora" required>
                                                                    <label>Movimientos</label>
                                                                    <select class="form-control mb-3" name="movimiento" id="selecto" required>
                                                                        <option value="0">Seleccionar</option>
                                                                        <?php include('movimientos.php');?>
                                                                    </select>
                                                                    <input type="text"  class="form-control mb-3" name="monto" id="monBan" placeholder="Monto" step="any" required pattern="[0-9]{2.01,30.01}">                                   
                                                                    <!-- <textarea name="descrip" class="form-control mb-3"  placeholder="Descripción de movimiento" cols="10" rows="10"></textarea>  -->
                                                                                                                        
                                                            
                                                                </div>
                                                                    <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                                    <a href="insertReferencia.php">
                                                                        <button class="btn btn-danger" type="submit">Aceptar</button>
                                                                    </a>
                                                                </div>
                                                            </form> 
                                                    </div>
                                                </div>
                                            </div>  

                                                                <!-- Modal
                                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <label>nombre  : </label><input type="text" id="nombre" name="" ><br>
                                                                    <label>apellido : </label><input type="text" id="apellido" name="">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                </div> -->
                                                            <?php
                                                        }
                                                        // if ($sum >= 1) {
                                                        //     echo $sum;
                                                        }
                                                        
                                                    }
                                                   
                                    ?>
                                        
                                        
                                        
                                        </tbody>
                                         
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                   
                </div>

                <!-- Content Row -->

                <!-- <div class="row">

                    <!-- Area Chart -->
                    <!-- <div class="col-xl-8 col-lg-7">
                       
                    </div> -->

                    <!-- Pie Chart -->
                    <!-- <div class="col-xl-4 col-lg-5">
                        
                    </div> 
                </div> -->

                <!-- Content Row -->
                <!-- <div class="row">

                    <!-- Content Column 
                    <div class="col-lg-6 mb-4">

                      

                       

                    </div>

                    
                </div> -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Su página web 2022</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
    <div class="modal fade" id="logoutModalS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="logout.php">Cerrar sesión</a>
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

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

     <!-- <script src="js/bootstrap.min.js"></script> -->
     <!-- <script src="js/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
     <script src="js/app.js"></script>

</body>
</html>