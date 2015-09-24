<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Datos de Donante</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url();?>index.php/consentimiento/view/consentimiento/">Consentimiento</a></li>
      <li class="active">Ver Datos de Donantes </li>
    </ol>
  </section>

  <section class="content">
      <!--Formulario para mostrar datos -->
    <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url()?>index.php/cdonante/guardarModificacionesDonante">
      <div class="form-group">
        <label for="nroDonante" class="col-lg-2 control-label ">Nro de Donante</label>
        <div class="col-lg-4">
          <input type="textbox" class="form-control" disabled="" 
           value="<?php echo $unaDonante[0]->nroDonante;?>">
           <input type="hidden" class="form-control" id="nroDonante"  name="nroDonante"
           value="<?php echo $unaDonante[0]->nroDonante;?>"> 
        </div>
      </div>
      <!-- Nombre -->
      <div class="form-group">
        <label for="nombre" class="col-lg-2 control-label ">Nombre</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input type="textbox" class="form-control" id="nombre" name="nombre"
          value="<?php echo $unaDonante[0]->nombre;?>">
        </div>
      </div>
      <!-- Apellido -->
      <div class="form-group">
        <label for="apellido" class="col-lg-2 control-label ">Apellido</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input type="textbox" class="form-control" id="apellido" name="apellido"
          value="<?php echo $unaDonante[0]->apellido;?>">
        </div>
      </div>
      <!-- DNI -->
      <div class="form-group">
        <label for="dni" class="col-lg-2 control-label ">DNI</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input  type="textbox" class="form-control" id="dni" name="dni"
          value="<?php echo $unaDonante[0]->dniDonante;?>">
        </div>
      </div>
       <!--Fecha de Nacimiento -->
      <div class="form-group">
        <label for="fechanac" class="col-lg-2 control-label ">Fecha de Nacimiento</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <?php
          $fechaArray = explode('-', $unaDonante[0]->fechaNacDonante);
          $date = new DateTime();
          $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
          $fecha= $date->format('d-m-Y'); ?>
          <input  type="textbox" class="form-control" id="fecha" name="fecha"
          value="<?php echo $fecha;?> ">
        </div>
      </div>
       <!--Tipo -->
      <div class="form-group">
        <label for="tipo" class="col-lg-2 control-label">Tipo de Donante</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <div>
            <select name="tipo" class="form-control" >
              <?php if ($unaDonante[0]->tipoDonante ==1) {
                # code...
                $tipo = "Externa";
              } else {
                # code...
                $tipo = "Interna";
              }
              ?>
              <option><?php echo $tipo;?></option>
              <option>Interna</option>
              <option>Externa</option>
            </select>
          </div>

        </div>
      </div>
      <!-- Coupacion -->
      <div class="form-group">
        <label for="ocupacion" class="col-lg-2 control-label">Ocupacion</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input type="textbox" class="form-control" id="ocupacion" 
          value="<?php echo $unaDonante[0]->ocupacion;?>">
        </div>
      </div>
      <!-- Estudios Alcanzados -->
      <div class="form-group">
        <label for="estudios" class="col-lg-2 control-label">Estudios Alcanzados</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <div>
              <select name="estudios" class="form-control" >
                <option>
                  <?php echo $unaDonante[0]->nivelEstudio;?>
                </option>
                <option>Primario Incompleto</option>
                <option>Primario Completo</option>
                <option>Secundario Incompleto</option>
                <option>Secundario Completo</option>
                <option>Terciario Incompleto</option>
                <option>Terciario Completo</option>
                <option>Universitario Incompleto</option>
                <option>Universitario Completo</option>
              </select>
          </div>
        </div>
      </div>
      <!-- Estado Civil -->
      <div class="form-group">
        <label for="estadoCivil" class="col-lg-2 control-label">Estado Civil</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <div >
            <select name="estadoCivil" class="form-control" >
              <option value="<?php echo $unaDonante[0]->estadoCivil;?>">
                <?php echo $unaDonante[0]->estadoCivil;?>
              </option>
              <option value="Soltera">Soltera</option>
              <option value="Casada">Casada</option>
              <option value="Viuda">Viuda</option>
              <option value="Otro">Otro</option>
              </select>
          </div>
        </div>
      </div>
      <!-- Telefono -->
      <div class="form-group">
        <label for="telefon" class="col-lg-2 control-label">Telefono</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input  type="textbox" class="form-control" id="celular" name="celular"
          value="<?php echo $unaDonante[0]->telefonoDonante;?>">
        </div>
      </div>
      <!--Email -->
      <div class="form-group">
        <label for="email" class="col-lg-2 control-label">Correo Electronico</label>
        <label class="fa fa-pencil"></label>
        <div class="col-lg-4">
          <input  type="textbox" class="form-control" id="email" name="email"
          value="<?php echo $unaDonante[0]->emailDonante;?>">
        </div>
      </div>    <div class="pull-right">
  
     <div class="form-group">
         
          <button type="submit" aria-hidden="true" 
             id="guardaDonante" class="btn btn-success btn-lg">Guardar Donante</button>
         </div>                  
    </div>
    </form> <!-- finaliza formulario para mostrar datos -->

    
</aside><!-- /.right-side -->

