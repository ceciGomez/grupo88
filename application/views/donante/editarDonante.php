<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Datos de Donante a Editar</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="<?php echo base_url();?>index.php/consentimiento/view/consentimiento/">Consentimiento</a></li>
      <li class="active">Ver Datos de Donantes </li>
    </ol>
  </section>

  <section class="content">
      <!--Formulario para mostrar datos -->
    <form data-toggle="validator" class="form-horizontal" role="form" method="POST" action="<?php echo base_url()?>index.php/cdonante/guardarModificacionesDonante">
        <div class="col-lg-12">  
          <div class="col-lg-6">
            <div class="form-group">
              <label for="nroDonante" >Nro de Donante</label>
                <div class="form-group">
                <input type="textbox" class="form-control" disabled="" 
                 value="<?php echo $unaDonante[0]->nroDonante;?>">
                 <input type="hidden" class="form-control" id="nroDonante"  name="nroDonante"
                 value="<?php echo $unaDonante[0]->nroDonante;?>">
                 </div> 
            </div> 
          </div>

          <!-- Nombre -->
          <div class="col-lg-6">
            <div class="form-group">
              <label for="nombre" >Nombre</label>
              <label title="Editar campo?" class="fa fa-pencil"></label>
              <div class="form-group">
                <input required type="textbox" class="form-control" id="nombre" name="nombre"
                value="<?php echo $unaDonante[0]->nombre;?>">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <span class="help-block with-errors">* Campo Requerido</span>
              </div>
            </div>
          </div>
        </div>
      <!-- Apellido -->
    <div class="col-lg-12">
      <div class="col-lg-6">
        <div class="form-group">
          <label for="apellido" >Apellido</label>
          <label title="Editar campo?" class="fa fa-pencil"></label>
          <div class="form-group">
            <input required type="textbox" class="form-control" id="apellido" name="apellido"
            value="<?php echo $unaDonante[0]->apellido;?>">
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <span class="help-block with-errors">* Campo Requerido</span>
          </div>
        </div>
      </div>
      <!-- DNI -->
        <div class="col-lg-6">
          <div class="form-group">
            <label for="dni">DNI</label>
            <label title="Editar campo?" class="fa fa-pencil"></label>
            <div class="form-group">
              <input required onkeypress = "return validarNum(event)" minlength="7" maxlength="8" type="textbox" class="form-control" id="dni" name="dni"
              value="<?php echo $unaDonante[0]->dniDonante;?>">
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <span class="help-block with-errors">* Campo Requerido</span>
            </div>
          </div>
        </div>
    </div>
       <!--Fecha de Nacimiento -->
    <div class="col-lg-12">
          <div class="col-lg-6">       
            <div class="form-group">
              <label for="tipo">Fecha de Nacimiento</label>
              <label title="Editar campo?" class="fa fa-pencil"></label>
              <div class="form-group">
                <div class='input-group date' id='datetimepicker10'>
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
                <span class="help-block with-errors" style="color: #990000">Campo Obligatorio</span>
              </div>
              <!-- /.input group -->
            </div>
           <!-- /.form group -->
          </div>      
      <!--Tipo -->
      <div class="col-lg-6">
            <label for="tipo">Tipo de Donante</label>
            <label title="Editar campo?" class="fa fa-pencil"></label>
            <div class="form-group">
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
    </div>
      <!-- Ocupacion -->
    <div class="col-lg-12">
        <div class="col-lg-6">
            <div class="form-group">
              <label for="ocupacion">Ocupacion</label>
              <label title="Editar campo?" class="fa fa-pencil"></label>
              <div class="form-group">
                <input type="textbox" class="form-control" id="ocupacion" name="ocupacion"
                value="<?php echo $unaDonante[0]->ocupacion;?>">
              </div>
            </div>
        </div>

      <!-- Estudios Alcanzados -->
      <div class="col-lg-6">
          <div class="form-group">
            <label for="estudios">Estudios Alcanzados</label>
            <label title="Editar campo?" class="fa fa-pencil"></label>
            <div class="form-group">
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
        </div>
    </div>
      <!-- Estado Civil -->
  <div class="col-lg-12">
    <div class="col-lg-6">
      <div class="form-group">
        <label for="estadoCivil">Estado Civil</label>
        <label title="Editar campo?" class="fa fa-pencil"></label>
        <div class="form-group">
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
    </div>
      <!-- Telefono -->
    <div class="col-lg-6">
      <div class="form-group">
        <label for="telefon">Telefono</label>
        <label title="Editar campo?" class="fa fa-pencil"></label>
        <div class="form-group">
          <input  type="textbox" class="form-control" id="celular" name="celular"
          value="<?php echo $unaDonante[0]->telefonoDonante;?>">
        </div>
      </div>
    </div>
  </div>
      <!--Email -->
  <div class="col-lg-12">
    <div class="col-lg-6">
      <div class="form-group">
        <label for="email">Correo Electronico</label>
        <label title="Editar campo?" class="fa fa-pencil"></label>
        <div class="form-group">
          <input  type="textbox" class="form-control" id="email" name="email"
          value="<?php echo $unaDonante[0]->emailDonante;?>">
        </div>
      </div> 
    </div>
       <div class="col-lg-6  content">
        <div class="form-group pull-right">
        <button type="submit" aria-hidden="true" 
             id="guardaDonanteEditado" class="btn btn-success btn-ms">Guardar Donante</button>        
        </div>
      </div>
  </div>
</form> <!-- finaliza formulario para mostrar datos -->

    
</aside><!-- /.right-side -->
<script src="<?php echo base_url();?>assets/internals/js/donanteinfo.js" type="text/javascript" charset="utf-8" async defer></script>
<script type="text/javascript">
         $(function () {
             $('#datetimepicker10').datetimepicker({ locale: 'es', viewMode: 'years', format: 'DD/MM/YYYY' });
         });
</script>
<script>
$('#form').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
    // handle the invalid form...
  } else {
    // everything looks good!
  }
})
</script>
