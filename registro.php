<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registrarse</title>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="images/huellalogo.png">

     <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="shortcut icon" href="images/huellalogo.png">
        <!-- Custom styles for this template -->
    <link href="bower_components/bootstrap/dist/css/style.css" rel="stylesheet">

</head>
<body background="images/happydog.jpg" style="background-size: cover;" style="text-decoration-color: #fefefe;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="wrapper-page">
                        <div class="m-t-40 card-box" style="background:rgba(1,1,1,.3);">
                            <div class="text-center">
                                <h2 class="text-uppercase m-t-0 m-b-30">
                                    <a href="index.php" class="text-success">
                                        <span><img src="images/milmascotaslogo.png" alt="" height="60"></span>
                                    </a>
                                </h2>
                                <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                            </div>
                            <div class="account-content">
                                <form class="form-horizontal">

                                    <div class="form-group m-b-20">
                                        <div class="col-xs-12">
                                            <label for="emailaddress"><font color= "#fefefe"> Nombre de usuario</font></label>
                                            <input class="form-control" type="text" id="nombreUsuario" required="" placeholder="nombre de usuario">
                                        </div>
                                    </div>   

                                    <div class="form-group m-b-20">
                                        <div class="col-xs-12">
                                            <label for="emailaddress"><font color= "#fefefe">Correo electronico</font></label>
                                            <input class="form-control" type="text" id="emailaddress" required="" placeholder="correo electronico">
                                        </div>
                                    </div> 

                                    <div class="form-group m-b-20">
                                        <div class="col-xs-12">
                                            <label for="password"><font color="white">Contraseña</label>
                                            <input class="form-control" type="password" required="" id="password" placeholder="contraseña">
                                        </div>
                                    </div>

                                    <div class="form-group m-b-20">
                                        <div class="col-xs-12">
                                            <label for="password"><font color="white">Vuelve a ingresar tu contraseña</label>
                                            <input class="form-control" type="password" required="" id="password" placeholder="contraseña">
                                        </div>
                                    </div>

                                    <div class="form-group m-b-30">
                                        <div class="col-xs-12">
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox5" type="checkbox">
                                                <label for="checkbox5">
                                                    No cerrar sesión
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group account-btn text-center m-t-10">
                                        <div class="col-xs-12">
                                            <button class="btn btn-lg btn-primary btn-block" type="submit"><a href="dashboard.php">Registrarme</a></button>
                                        </div>
                                    </div>

                                </form>

                                <div class="clearfix"></div>

                            </div>
                        </div>
                        <!-- end card-box-->

                        <div class="row m-t-50">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted"><font color="black">Ya tengo una cuenta </font><a href="index.php" class="text-dark m-l-5"><font color="blue">Iniciar Sesión</a></p>
                            </div>
                        </div>

                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div>
    <!-- END HOME -->
<!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!--Morris Chart-->
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
    <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App Js -->
        <script src="assets/js/jquery.app.js"></script>

</body>
</html>