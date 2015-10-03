<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Banco de Leche Materna | Pagina Principal</title>
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
      <link href="<?php echo base_url()?>assets/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
      
      <script src="<?php echo base_url()?>assets/vendors/jquery/jquery.js"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
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
         <nav class="navbar navbar-static-top" role="navigation">
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
         </nav>
      </header>
      <div class="wrapper row-offcanvas row-offcanvas-left">