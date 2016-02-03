<aside class="right-side">
   <!-- section header -->
   <section class="content-header">
      <h1>
         Generar Hoja de Ruta
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="#">Hoja de Ruta</a></li>
         <li class="active">Generar Hoja de Ruta</li>
      </ol>
   </section>
   <!-- fin section header -->
   <!-- section body -->
   <section class="container-fluid">
      <div class="content row col-xs-12">
         <form id="buscarConsxfiltro_form" role="form" method="POST" action="<?php echo base_url()?>index.php/chojaderuta/buscarConsxFiltro" >
            <!-- text input -->
            <div class="form-group col-xs-3">
               <label>Indicar Fecha de Recorrido</label>
               <div class="form-group">
                  <div class='input-group date' id='datetimepicker1'>
                     <span class="input-group-addon">
                     <span class="fa fa-calendar"></span>
                     </span>
                     <input type="text" class="form-control" id="fnac" 
                        data-inputmask="'alias': 'dd/mm/yyyy'" 
                        data-mask name="fecha" placeholder="dd/mm/aaaa" required/>
                  </div>
               </div>
               <!-- /.input group -->
            </div>
            <!-- /.form group -->
            <div class="content col-xs-12">
               <label>Armar Hoja de Ruta por:</label>
               <div class="radio" style="line-height:4">
                  <label style="text-align:center">
                  <input type="radio" name="criterio" id="criterio" value="zona" class= "zona">
                  Zona
                  </label>
                  <label>
                  <input type="radio" name="criterio" id="criterio" value="dia" class="dia">
                  Dia
                  </label>
               </div>
               <!-- text input -->
               <div class="form-group col-xs-4" id="zona">
                  <label>Indicar Zona</label>
                  <div style="display:inline;">
                     <select name="zona" id="zona" value="$valor" class="form-control">
                        <?php foreach ($todasLasZonas as $key):?>
                           <option value="<?php echo  $key->idZona;?>">
                              <?php echo $key->nombreZona; ?>
                           </option>
                        <?php endforeach ?>
                        </select>
                  </div>
               </div>
               <!-- /.input group -->
               <div class="form-group col-xs-4" id="dia">
                  <label>Indicar Dia</label>
                  <div style="display:inline;" >
                     <select name="dia" class="form-control">
                        <option value="Lunes">Lunes</option>
                        <option value="Martes">Martes</option>
                        <option value="Miercoles">Miercoles</option>
                        <option value="Jueves">Jueves</option>
                        <option value="Viernes">Viernes</option>
                        <option value="Todos">Todos</option>
                     </select>
                  </div>
               </div>
               <div class="content col-xs-12">
                  <div class="form-group col-xs-4" >
                     <label for="chofer" class="col-xs-4 control-label">Chofer</label>
                     <input id="chofer" name="chofer" >
                  </div>
                  <div class="form-group col-xs-4" >
                     <label for="asistente" class="col-xs-4 control-label">Asistente </label>
                     <input id="asist" name="asistente">
                  </div>
               </div>
            </div>
            <div class="pull-right content">
               <div class="form-group">
                  <button type="button"  aria-hidden="true" 
                     id="buscarConsxfiltro" class="btn btn-success btn-md">Crear Hoja de Ruta</button>
               </div>
            </div>
         </form>
         <!-- /.form  -->
      </div>
   </section>
   <!-- fin section body -->
</aside>
<!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/hojarutainfo.js" type="text/javascript" charset="utf-8" async defer></script>
<!-- script para la fecha -->

<script type="text/javascript">
   $(document).ready(function() {
      $("#zona").hide();
      $("#dia").hide();
      $(".radio label").click(function(event) {
         console.log(event);
         if ($(event.target.children).find("input").val()=="zona") {
            $("#zona").show();
            $("#dia").hide();
         }else{
            $("#zona").hide();
            $("#dia").show(); 
         };
      });
   });
</script>
