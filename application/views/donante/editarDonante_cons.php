<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Datos de Donante a Editar</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="<?php echo base_url();?>index.php/consentimiento/view/buscaconsentimiento/">Consentimiento</a></li>
      <li class="active">Ver Datos de Donantes </li>
    </ol>
  </section>

  <section class="content">
      <!--Formulario para mostrar datos -->
    <form data-toggle="validator" class="form-horizontal" role="form" method="POST" action="<?php echo base_url()?>index.php/cdonante/guardarModificacionesDonante_cons">
       
          
            <div class="form-group">
              <label for="nroDonante" class="col-lg-2">Nro de Donante</label>
                <div class="form-group col-lg-3">
                <input type="textbox" class="form-control" disabled="" 
                 value="<?php echo $unaDonante[0]->nroDonante;?>">
                 <input type="hidden" class="form-control" id="nroDonante"  name="nroDonante"
                 value="<?php echo $unaDonante[0]->nroDonante;?>">
                 </div> 
            </div> 
        

          <!-- Nombre -->

        
        <div class="form-group">

            <label class="col-lg-2"for="nombre">Nombre</label>
              <div class="form-group col-lg-3">
                <input required type="textbox" class="form-control" id="nombre" name="nombre"
                value="<?php echo $unaDonante[0]->nombre;?>">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors">* Campo Requerido</span>
              </div>
           
      <!-- Apellido -->
             <label class="col-lg-2"for="apellido">Apellido</label>
              <div class="form-group col-lg-3">
                <input required type="textbox" class="form-control" id="apellido" name="apellido"
                value="<?php echo $unaDonante[0]->apellido;?>">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors">* Campo Requerido</span>
              </div>
      </div>
     

      <!-- DNI -->
       
      <div class="form-group">
            <label for="dni" class="col-lg-2">DNI</label>
            <div class="form-group col-lg-3">
              <input required onkeypress = "return validarNum(event)" minlength="7" maxlength="8" type="textbox" class="form-control" id="dni" name="dni"
              value="<?php echo $unaDonante[0]->dniDonante;?>">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <span class="help-block with-errors">* Campo Requerido</span>
            </div>
        

       <!--Fecha de Nacimiento -->

              <label for="tipo" class="col-lg-2">Fecha de Nacimiento</label>
              <div class="form-group col-lg-3">
                <div class='input-group date' id='datetimepicker1'>
                      <?php
                      $fechaArray = explode('-', $unaDonante[0]->fechaNacDonante);
                      $date = new DateTime();
                      $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                      $fecha= $date->format('d/m/Y'); ?>
                      <input required type="text" class="form-control" id="fecha" data-inputmask="'alias': 'dd/mm/yyyy'" 
                      data-mask name="fecha" value="<?php echo $fecha;?>"/>
                      <span class="input-group-addon">
                      <span class="fa fa-calendar"></span>
                      </span>
                </div>
                <span class="help-block with-errors">*Campo Requerido</span>
              </div>
              <!-- /.input group -->
      </div>
           <!-- /.form group -->
    
      <!--Tipo -->
      <div class=" form-group ">
            <label for="tipo" class="col-lg-2">Tipo de Donante</label>
            <div class="form-group col-lg-3">
              <div>
                <select name="tipo" class="form-control ">
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
     
      <!-- Ocupacion -->
  
              <label for="ocupacion" class="col-lg-2">Ocupacion</label>
              <div class="form-group col-lg-3">
                <input type="textbox" class="form-control" id="ocupacion" name="ocupacion"
                value="<?php echo $unaDonante[0]->ocupacion;?>">
              </div>
      </div>

      <!-- Estudios Alcanzados -->

      <div class="form-group ">
            <label for="estudios" class="col-lg-2">Estudios Alcanzados</label>
            <div class="form-group col-lg-3">
              <div>
                  <select name="estudios" class="form-control" >
                    <option>
                      <?php echo $unaDonante[0]->nivelEstudio;?>
                    </option>
                        <option value="Primario Incompleto">Primario Incompleto</option>
                        <option value="Primario Completo">Primario Completo</option>
                        <option value="Secundario Incompleto">Secundario Incompleto</option>
                        <option value="Secundario Completo">Secundario Completo</option>
                        <option value="Terciario Incompleto">Terciario Incompleto</option>
                        <option value="Terciario Completo">Terciario Completo</option>
                        <option value="Universitario Incompleto">Universitario Incompleto</option>
                        <option value="Universitario Completo">Universitario Completo</option>
                  </select>
              </div>
            </div>
          
 <!-- Estado Civil -->

                <label for="estadoCivil" class="col-lg-2">Estado Civil</label>
                <div class="form-group col-lg-3">
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
              <label for="telefon" class="col-lg-2">Telefono</label>
              <div class="form-group col-lg-3">
                <input  type="textbox" class="form-control" id="celular" name="celular"
                value="<?php echo $unaDonante[0]->telefonoDonante;?>">
              </div>
         
            <!--Email -->

              <label for="email" class="col-lg-2">Correo Electronico</label>
              <div class="form-group col-lg-3">
                <input  type="textbox" class="form-control" id="email" name="email"
                value="<?php echo $unaDonante[0]->emailDonante;?>">
              </div>
      </div> 

       <div class="col-lg-12  content">
        <div class="form-group" style="float:right">
          <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
        <button type="submit" aria-hidden="true" 
             id="guardaDonanteEditado" class="btn btn-success btn-ms">Guardar Cambios en Donante</button>        
        </div>
      </div>

</form> <!-- finaliza formulario para mostrar datos -->

    
</aside><!-- /.right-side -->
<script src="<?php echo base_url();?>assets/internals/js/donanteinfo.js" type="text/javascript" charset="utf-8" async defer></script>

<script>
$('#form').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
    // handle the invalid form...
  } else {
    // everything looks good!
  }
})
</script>
