 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Milmascotas | Administración</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="shortcut icon" href="images/huellalogo.png">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/skin-black-light.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="../bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">

  <!-- daterange picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link href="css/summernote.css" rel="stylesheet" />
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<body style="background-color:#D2B4DE;">
<div class="wrapper">

   <header class="main-header">
    <!-- Logo -->
      <div class="">
        <a href="index.php" class="logo">
            <img src="images/milmascotaslogo2.png" width="160px" height="50px" alt="logo" class="logo-lg" />
        </a>
    </div>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
       
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">3</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Usted tiene 3 mensajes</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Omar Suarez
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Disculpe, mi mascota se enfermó, cree que podría...</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Blanca Gonzalez
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Buen dia, ayer en la noche mi perra empezo a vomitar mucho...</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Susan Marin
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Hola mil mascotas, gracias! Coco ya esta en casa super bien...</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Usted tiene 10 notificaciones</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 25 nuevos seguidores en facebook
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Esta tomando mucho tiempo procesar su pago
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 2 personas han marcado tu servicio como "malo"
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i>3 mascotas recuperadas el dia de ayer
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todo</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Usted tiene 8 tareas para hoy</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Entregar mascota #3025
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">8:30</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Asear a los conejos
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">9:30</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Modificar el anuncio del frente
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  
                </ul>
              </li>
              <li class="footer">
                <a href="#">Ver todas</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/chica.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Regina George</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/chica.png" class="img-circle" alt="User Image">

                <p>
                  Regina George-Administradora
                  <small>Miembro desde Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Seguidores</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Ventas del año</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Amigos</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="perfil.php" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="index.php" class="btn btn-default btn-flat">Cerrar sesion</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/chica.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Regina George</p><i class="fa fa-circle text-success"></i> En linea</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- search form -->
      <form action="#" method="get" class="sidebar-form" style="border-radius: 60px;">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
        <li class="header">Ir a:</li>
        <li>
          <a href="dashboard.php">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li>
          <a href="resumen.php">
            <i class="fa fa-pie-chart"></i> <span>Resumen del mes</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-blue">1</small>
            </span>
          </a>
        </li>

        
        <li>
          <a href="calendario.php">
            <i class="fa fa-calendar"></i> <span>Calendario</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="correo.php">
            <i class="fa fa-envelope"></i> <span>Mensajes</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="timeline.php">
            <i class="fa fa-times"></i> <span>Linea del tiempo
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="Contactos.php">
            <i class="fa fa-th"></i> <span>Contactos
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="perfil.php">
            <i class="fa fa-user"></i> <span>Perfil
            </span>
          </a>
          </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
 <!-- quick email widget -->
 <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Enviar correo</h3>
            </div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-body">
              <!-- Date -->
              <div class="form-group">
                <label>Fecha de envío:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              
              <!-- /.form group -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
            <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Hora de envío:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>

               <div class="col-md-6">

                                <div class="p-20 m-b-20">
                                    <form>
                                        <div class="form-group m-b-0">
                                            <label class="control-label">Agregar un archivo</label>
                                            <input type="file" class="filestyle" data-buttonname="btn-primary">
                                        </div>

                                    </form>

                                </div>

                            </div> <!-- end col -->

            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default" id="sendEmail">Enviar
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>
          </div>
        </section>
      </div>
    </div>
  </body>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
    </html>