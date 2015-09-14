<html>
<head>
	<title><?php echo $title?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/vendors/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/internals/css/css.css">
</head>
<nav class="navbar navbar-inverse ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
      data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Banco de Leche Materna</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
          aria-expanded="false">Consentimiento <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Donante</a></li>
            <li><a href="#">Serología</a></li>
            <li><a href="#">Bebe Asociado</a></li>
            <li><a href="#">Centros</a></li>
            
          </ul>
        </li>
      </ul>
      
<!-- Ver como realizar menu de menu/-->
<ul class="nav navbar-nav">
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
          aria-expanded="false">Hoja de Ruta <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
         <li><a href="#">Generar Hoja de Ruta</a></li>
         <li class="submenu">
            <a href="#">Administrar Frascos <span class="caret"></span></a>
              <ul class="dropdown-menu"> 
                <li><a href="#">bla bla bla</a></li>
              </ul>          
          </li>

         <li><a href="#">Registrar Ingreso Frascos</a></li>
        
          

    </ul>
  </li>
</ul>
          
            
         
<! Buscar Algo/>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          
          <input type="text" class="form-control" placeholder="Busque Aqui">
          
        </div>
        <button type="submit" class="btn btn-default">Buscar
           <span class="glyphicon glyphicon-search"></span>
        </button>
      </form>
     

      <ul class="nav navbar-nav ">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
           aria-haspopup="true" 
          aria-expanded="false">Pasteurización <span class="caret"></span></a>

          
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>index.php/page/view/paso1">Registrar Nueva Pasteurización</a></li>
            <li><a href="#">Administrar Biberones</a></li>
            <li><a href="#">Registrar Examen de Cultivos</a></li>
            
          </ul>
        </li>
      </ul>

            <ul class="nav navbar-nav ">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
          aria-expanded="false">Fraccionamiento <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Registrar Fraccionamiento</a></li>
            <li><a href="#">Registrar Consumo de Bebe Receptor</a></li>
            <li><a href="#">Administrar Bebes Receptores</a></li>
            <li><a href="#">Ingresar Prescripción Médica</a></li>
            
          </ul>
        </li>
      </ul>
    


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<body>
