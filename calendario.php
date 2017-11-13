<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Calendario</title>
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
  <!-- fullCalendar -->
  <link rel="stylesheet" href="../bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="../bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini" style="background-color:#D2B4DE;">
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


  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 901px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Calendario
        <small>Controll</small>
      </h1>
    </section>

    <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Eventos</h4>
            </div>
            <div class="box-body">
              <!-- the events -->
              <div id="external-events">
                <div class="external-event bg-green ui-draggable ui-draggable-handle" style="position: relative; z-index: auto; width: 229.75px; right: auto; height: 30px; bottom: auto; left: 0px; top: 0px;">Lunch</div>
                <div class="external-event bg-yellow ui-draggable ui-draggable-handle" style="position: relative;">Go home</div>
                <div class="external-event bg-aqua ui-draggable ui-draggable-handle" style="position: relative;">Do homework</div>
                <div class="external-event bg-light-blue ui-draggable ui-draggable-handle" style="position: relative;">Work on UI design</div>
                <div class="external-event bg-red ui-draggable ui-draggable-handle" style="position: relative;">Sleep tight</div>
                <div class="checkbox">
                  <label for="drop-remove">
                    <input type="checkbox" id="drop-remove">
                    remove after drop
                  </label>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Create Event</h3>
            </div>
            <div class="box-body">
              <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                <ul class="fc-color-picker" id="color-chooser">
                  <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                  <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                </ul>
              </div>
              <!-- /btn-group -->
              <div class="input-group">
                <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                <div class="input-group-btn">
                  <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                </div>
                <!-- /btn-group -->
              </div>
              <!-- /input-group -->
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2>November 2017</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 506px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content" style="height: 84px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2017-10-29"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2017-10-30"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2017-10-31"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2017-11-01"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2017-11-02"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2017-11-03"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2017-11-04"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2017-10-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2017-10-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2017-10-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-wed fc-past" data-date="2017-11-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-thu fc-past" data-date="2017-11-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-fri fc-past" data-date="2017-11-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-sat fc-past" data-date="2017-11-04"><span class="fc-day-number">4</span></td></tr></thead><tbody><tr><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" style="background-color: rgb(0, 166, 90); border-color: rgb(255, 255, 255);"><div class="fc-content"> <span class="fc-title">Lunch</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#f56954;border-color:#f56954"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">All Day Event</span></div></a></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 84px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2017-11-05"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2017-11-06"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2017-11-07"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2017-11-08"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2017-11-09"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2017-11-10"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2017-11-11"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2017-11-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-mon fc-past" data-date="2017-11-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-tue fc-past" data-date="2017-11-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-wed fc-past" data-date="2017-11-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-thu fc-past" data-date="2017-11-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-fri fc-past" data-date="2017-11-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-sat fc-past" data-date="2017-11-11"><span class="fc-day-number">11</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#f39c12;border-color:#f39c12"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Long Event</span></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 84px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2017-11-12"></td><td class="fc-day fc-widget-content fc-mon fc-today " data-date="2017-11-13"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2017-11-14"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2017-11-15"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2017-11-16"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2017-11-17"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2017-11-18"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2017-11-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-mon fc-today " data-date="2017-11-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-tue fc-future" data-date="2017-11-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-wed fc-future" data-date="2017-11-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-thu fc-future" data-date="2017-11-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-fri fc-future" data-date="2017-11-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-sat fc-future" data-date="2017-11-18"><span class="fc-day-number">18</span></td></tr></thead><tbody><tr><td rowspan="2"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#0073b7;border-color:#0073b7"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td><td class="fc-event-container" rowspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#00a65a;border-color:#00a65a"><div class="fc-content"><span class="fc-time">7p</span> <span class="fc-title">Birthday Party</span></div></a></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td><td rowspan="2"></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#00c0ef;border-color:#00c0ef"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 84px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2017-11-19"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2017-11-20"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2017-11-21"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2017-11-22"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2017-11-23"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2017-11-24"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2017-11-25"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2017-11-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-mon fc-future" data-date="2017-11-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-tue fc-future" data-date="2017-11-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-wed fc-future" data-date="2017-11-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-thu fc-future" data-date="2017-11-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-fri fc-future" data-date="2017-11-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-sat fc-future" data-date="2017-11-25"><span class="fc-day-number">25</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 84px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2017-11-26"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2017-11-27"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2017-11-28"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2017-11-29"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2017-11-30"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2017-12-01"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2017-12-02"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2017-11-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-mon fc-future" data-date="2017-11-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-tue fc-future" data-date="2017-11-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-wed fc-future" data-date="2017-11-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-thu fc-future" data-date="2017-11-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2017-12-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2017-12-02"><span class="fc-day-number">2</span></td></tr></thead><tbody><tr><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" href="http://google.com/" style="background-color:#3c8dbc;border-color:#3c8dbc"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Click for Google</span></div></a></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 86px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2017-12-03"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2017-12-04"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2017-12-05"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2017-12-06"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2017-12-07"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2017-12-08"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2017-12-09"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2017-12-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2017-12-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2017-12-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2017-12-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2017-12-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2017-12-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2017-12-09"><span class="fc-day-number">9</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
</body>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- fullCalendar -->
<script src="../bower_components/moment/moment.js"></script>
<script src="../bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src='js/fullcalendar.min.js'></script>
<!-- Page specific script -->
<script>
  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },
      //Random default events
      events    : [
        {
          title          : 'All Day Event',
          start          : new Date(y, m, 1),
          backgroundColor: '#f56954', //red
          borderColor    : '#f56954' //red
        },
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'http://google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      }
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
</body>
</html>
