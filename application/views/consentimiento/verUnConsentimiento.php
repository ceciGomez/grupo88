
<aside class="right-side">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Detalle de Consentimiento</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="<?php echo base_url();?>index.php/consentimiento/view/consentimiento/">Consentimiento</a></li>
      <li class="active">Ver un Consentimiento </li>
    </ol>
  </section>
  <section class="content">
      <!--Formulario para mostrar datos -->
    <form class="form-horizontal" role="form">
             <!--      COMIENZA MADRE DONANTE      -->
        <!-- DNI -->
    <div class="row container">
      <h4><em><strong>Donante</strong></em></h4>
      <div class="form-group">
        <label for="dni" class="col-lg-2 control-label">DNI</label>
        <div class="col-lg-3">
          <input  class="form-control" id="" disabled=""
          value="<?php echo $unaDonante[0]->dniDonante;?>">
        </div>
      </div>
      <div class="form-group">
        <label for="" class="col-lg-2 control-label">Nombre de Donante</label>
        <div class="col-lg-3">
          <input  class="form-control" id="cnombre" disabled=""
          value="<?php echo $unaDonante[0]->nombre;?>">
        </div>
      </div>
      <div class="form-group">
        <label for="dni" class="col-lg-2 control-label">Apellido de Donante</label>
        <div class="col-lg-3">
          <input  class="form-control" id="dni" disabled=""
          value="<?php echo $unaDonante[0]->apellido;?>">
        </div>
      </div>
  
       <!--Fecha de Nacimiento -->
      <div class="form-group">
        <label for="fechanac" class="col-lg-2 control-label">Fecha de Nacimiento de Donante</label>
        <div class="col-lg-3">
          <?php
          $fechaArray = explode('-', $unaDonante[0]->fechaNacDonante);
          $date = new DateTime();
          $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
          $fecha= $date->format('d-m-Y'); ?>
          <input  class="form-control" id="fechanac" disabled=""
          value="<?php echo $fecha;?>">
        </div>
      </div>
      
      <!-- Telefono -->
      <div class="form-group">
        <label for="telefon" class="col-lg-2 control-label">Telefono</label>
        <div class="col-lg-3">
          <input  class="form-control" id="telefono" disabled=""
          value="<?php echo $unaDonante[0]->telefonoDonante;?>">
        </div>
      </div>
      <!--Email -->
      <div class="form-group">
        <label for="" class="col-lg-2 control-label">Correo Electronico</label>
        <div class="col-lg-3">
          <input  class="form-control" id="" disabled=""
          value="<?php echo $unaDonante[0]->emailDonante;?>">
        </div>
      </div>
       <!--TIPO DE DONANTE -->
      <div class="form-group">
        <label for="tipo" class="col-lg-2 control-label">Tipo de Donante</label>
        <div class="col-lg-3">
          <?php if ($unaDonante[0]->tipoDonante ==1) {
                # code...
                $tipo = "Externa";
              } else {
                # code...
                $tipo = "Interna"; 
              }
              ?>
          <input  class="form-control" id="tipo" disabled=""
          value="<?php echo $tipo?>">
        </div>
      </div>
    </div>
   <!--      COMIENZA BEBE ASOCIADO      -->
    <!-- Nombre -->
    <?php var_dump($unAsociado) ?>
  <div class="row container">
    <h4><em><strong>Bebe Asociado</strong></em></h4>
      <div class="form-group">
        
        <label for="" class="col-lg-2 control-label">Nombre de Bebe Asociado</label>
        <div class="col-lg-3">
          <input  class="form-control" id="" disabled=""
          value="<?php echo $unAsociado[0]->nombreBebeAsociado;?>">
        </div>
      </div>
      <!-- APELLIDO -->
      <div class="form-group">
        <label for="" class="col-lg-2 control-label">Apellido de Bebe Asociado</label>
        <div class="col-lg-3">
          <input type="email" class="form-control" id="" disabled=""
          value="<?php echo $unAsociado->apellidoBebeAsociado;?>">
        </div>
      </div>
      <!-- EDAD GESTACIONAL -->
      <div class="form-group">
        <label for="" class="col-lg-2 control-label">Edad Gestacional de Bebe Asociado</label>
        <div class="col-lg-3">
          <input type="email" class="form-control" id="" disabled=""
          value="<?php echo $unAsociado->edadGestBebAsociado;?>">
        </div>
      </div>
     </div>
    
  <div class="row container">
    <h4><em><strong>Consentimiento</strong></em></h4>

      <div class="form-group">
        <label for="" class="col-lg-2 control-label">Fecha de inicio de donacion(fecha desde)</label>
        <div class="col-lg-3">

          <?php
          $fechaArray = explode('-', $unConsentimiento[0]->fechaDesde);
          $date = new DateTime();
          $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
          $fecha= $date->format('d-m-Y'); ?>
          <input  class="form-control" id="" disabled=""
          value="<?php echo $fecha;?>">
        </div>
        </div>

        <div class="form-group">
            <label for="" class="col-lg-2 control-label">Fecha de finalizacion de donacion(fecha hasta)</label>
              <div class="col-lg-3">
                <?php
                $fechaArray = explode('-', $unConsentimiento[0]->fechaHasta);
                $date = new DateTime();
                if ($fechaArray[0] == 0 && $fechaArray[1] == 0) {
                    $date->setDate(0000, 00, 00);
                }
                $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                $fecha= $date->format('d-m-Y'); ?>
                <input  class="form-control" id="" disabled=""
                value="<?php echo $fecha;?>">
              </div>
        </div>

      <div class="form-group">
        <label for="" class="col-lg-2 control-label">Edad Gestacional de Bebe Aso</label>
        <div class="col-lg-3">
          <input type="email" class="form-control" id="" disabled=""
          value="<?php echo $unAsociado->edadGestBebAsociado;?>">
        </div>
        </div>
      </div>

      </div>



    </form> <!-- finaliza formulario para mostrar datos -->
    <div class="row pull-right col-lg-4">
      <a href="#">
        <button type="button" class="btn btn-success btn-md">Volver</button>
      </a>
      <a href="<?php echo base_url()?>index.php/cdonante/view/editarDonante/<?php echo $unaDonante[0]->nroDonante;?>">
        <button type="button" class="btn btn-success btn-md">Editar Donante</button>
      </a>
    </div>

  </section>




<!--Cierra el aside inicial -->
  </aside><!-- /.right-side -->
