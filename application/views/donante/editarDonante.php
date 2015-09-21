<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Datos de Donante</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Consentimiento</a></li>
      <li class="active">Ver Datos de Donantes </li>
    </ol>
  </section>

  <section class="content">
      <!--Formulario para mostrar datos -->
    <form class="form-horizontal" role="form">
      <div class="form-group">
        <label for="nroDonante" class="col-lg-2 control-label ">Nro de Donante</label>
        <div class="col-lg-4">
          <input type="email" class="form-control" id="nroDonante"  disabled=""
           placeholder="<?php echo $unaDonante[0]->nroDonante;?>">
        </div>
      </div>
      <!-- Nombre -->
      <div class="form-group">
        <label for="nombre" class="col-lg-2 control-label ">Nombre</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input type="email" class="form-control" id="nombre" 
          placeholder="<?php echo $unaDonante[0]->nombre;?>">
        </div>
      </div>
      <!-- Apellido -->
      <div class="form-group">
        <label for="apellido" class="col-lg-2 control-label ">Apellido</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input type="email" class="form-control" id="apellido" 
          placeholder="<?php echo $unaDonante[0]->apellido;?>">
        </div>
      </div>
      <!-- DNI -->
      <div class="form-group">
        <label for="dni" class="col-lg-2 control-label ">DNI</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input  class="form-control" id="dni"
          placeholder="<?php echo $unaDonante[0]->dniDonante;?>">
        </div>
      </div>
       <!--Fecha de Nacimiento -->
      <div class="form-group">
        <label for="fechanac" class="col-lg-2 control-label ">Fecha de Nacimiento</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input  class="form-control" id="fechanac" 
          placeholder="<?php echo $unaDonante[0]->fechaNacDonante;?> (aaaa/mm/dd)">
        </div>
      </div>
       <!--Tipo -->
      <div class="form-group">
        <label for="tipo" class="col-lg-2 control-label">Tipo de Donante</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input  class="form-control" id="tipo" 
          placeholder="<?php echo $unaDonante[0]->tipoDonante;?>">
        </div>
      </div>
      <!-- Coupacion -->
      <div class="form-group">
        <label for="ocupacion" class="col-lg-2 control-label">Ocupacion</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input type="email" class="form-control" id="ocupacion" 
          placeholder="<?php echo $unaDonante[0]->ocupacion;?>">
        </div>
      </div>
      <!-- Estudios Alcanzados -->
      <div class="form-group">
        <label for="estudios" class="col-lg-2 control-label">Estudios Alcanzados</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input type="email" class="form-control" id="estudios" 
          placeholder="<?php echo $unaDonante[0]->nivelEstudio;?>">
        </div>
      </div>
      <!-- Estado Civil -->
      <div class="form-group">
        <label for="estadoCivil" class="col-lg-2 control-label">Estado Civil</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input  class="form-control" id="estadoCivil" 
          placeholder="<?php echo $unaDonante[0]->estadoCivil;?>">
        </div>
      </div>
      <!-- Telefono -->
      <div class="form-group">
        <label for="telefon" class="col-lg-2 control-label">Telefono</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input  class="form-control" id="telefono"
          placeholder="<?php echo $unaDonante[0]->telefonoDonante;?>">
        </div>
      </div>
      <!--Email -->
      <div class="form-group">
        <label for="email" class="col-lg-2 control-label">Correo Electronico</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input  class="form-control" id="email" 
          placeholder="<?php echo $unaDonante[0]->emailDonante;?>">
        </div>
      </div>
    </form> <!-- finaliza formulario para mostrar datos -->
    <div class="row pull-right col-lg-4">
      <a href="<?php echo base_url();?>index.php/cdonante/view/verDonantes">
        <button type="button" class="btn btn-success btn-md">Volver</button></a>
      </div>
    </div>
  </section>




<!--Cierra el aside inicial -->
  </aside><!-- /.right-side -->