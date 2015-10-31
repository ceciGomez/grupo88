<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Banco de Leche Humana| Pagina Principal</title>
      <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      <!-- bootstrap 3.0.2 -->
      <link href="<?php echo base_url()?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <!-- font Awesome -->
      <link href="<?php echo base_url()?>assets/vendors/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <!-- Ionicons -->
      <link href="<?php echo base_url()?>assets/vendors/ionicons.min.css" rel="stylesheet" type="text/css" />
      <!-- Morris chart -->
      <link href="<?php echo base_url()?>assets/vendors/morris/morris.css" rel="stylesheet" type="text/css" />
      <!-- jvectormap -->
      <link href="<?php echo base_url()?>assets/vendors/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
      <!-- fullCalendar -->
      <link href="<?php echo base_url()?>assets/vendors/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
      <!-- Daterange picker -->
      <link href="<?php echo base_url()?>assets/vendors/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
      <!-- bootstrap wysihtml5 - text editor -->
      <link href="<?php echo base_url()?>assets/vendors/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
      <!-- Theme style -->
      <link href="<?php echo base_url()?>assets/vendors/AdminLTE.css" rel="stylesheet" type="text/css" />
      <!-- datables viejo
      <link href="<?php echo base_url()?>assets/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
      -->
      <!-- datatables nuevo -->
      <link href="<?php echo base_url()?>assets/vendors/DataTables/datatables.min.css" rel="stylesheet" type="text/css" />
      <!-- favicon -->
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/internals/img/favicon/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/internals/img/favicon/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/internals/img/favicon/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/internals/img/favicon/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/internals/img/favicon/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>assets/internals/img/favicon/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/internals/img/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/internals/img/favicon/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/internals/img/favicon/favicon-16x16.png">
      <link rel="manifest" href="/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <!-- fin favicon -->

      <script src="<?php echo base_url()?>assets/vendors/jquery/jquery.js"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
       <!-- Calendario -->
      <link href="<?php echo base_url()?>assets/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />     
      <script type="text/javascript" src="<?php echo base_url()?>assets/vendors/bootstrap-datetimepicker/jquery-2.1.1.min.js"></script>
      <script src="<?php echo base_url()?>assets/vendors/bootstrap-datetimepicker/moment-with-locales.js"></script>
      <script src="<?php echo base_url()?>assets/vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>
      <!-- para validar datos -->
      <script src="<?php echo base_url()?>assets/vendors/bootstrap-validator/validator.min.js"></script>
      <!-- para graficar datos -->
      <script src="<?php echo base_url()?>assets/vendors/chartjs/Chart.min.js"></script>
   
   </head>
   <body class="skin-black">

      <!-- header logo: style can be found in header.less -->
      <header class="header">
         <a href="<?php echo base_url();?>index.php/page/view" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <div>
               <img src="<?php echo base_url();?>assets/internals/img/logo.png" alt="BLH" height="50" width="auto">
            </div>
            <!-- <img alt="Banco de Leche Humana" 
               class="img-responsive" height="auto" width="auto";> 
               -->
         </a>
         <!-- Header Navbar: style can be found in header.less -->
         <nav class="navbar navbar-static-top" role="navigation" aling= "center">
            <!-- Sidebar toggle button-->
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>
            <div class="navbar-right">
               <ul class="nav navbar-nav">
                  <!-- User Account: style can be found in dropdown.less -->
                  <li class="dropdown user user-menu">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <i class="glyphicon glyphicon-user"></i>
                     <span>Eric Cuzziol<i class="caret"></i></span>
                     </a>
                     
                     <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                           <img src="img/avatar5.png" class="img-circle" alt="User Image" />
                           <p>
                              Eric Cuzziol 
                           </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                           <div class="pull-left">
                              <a href="#" class="btn btn-default btn-flat">Perfil</a>
                           </div>
                           <div class="pull-right">
                              <a href="#" class="btn btn-default btn-flat">Cerrar Sesion</a>
                           </div>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <div style="color:Black;font-size:16px;line-height:3;text-indent:10px;">
               <i>
                  <script>
                  var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                  var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                  var f=new Date();
                  document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " 
                  + meses[f.getMonth()] + " de " + f.getFullYear() + "." + " " + "Hora" + " " 
                  + f.getHours() + ":" + (f.getMinutes()<10?"0":"") + f.getMinutes());
                  </script>
               </i>
            </div>
         </nav>
      </header>
      <div class="wrapper row-offcanvas row-offcanvas-left">