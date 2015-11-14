
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
                  <div class='input-group date' id='datetimepicker10'>
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
            <div class="box content col-xs-12">
            <div class=" col-xs-12">
               <label>Armar Hoja de Ruta por:</label>
               <div class="radio" style="line-height:4">
                     <!-- EL SCRIPT ESTA EN LA CABECERA-->
                     <label style="text-align:center">
                     <input type="radio" name="criterio" id="criterio0" value="zona"                   
                     onclick="mostrarReferencia();" checked>
                     Zona
                     </label>
                     <label>
                     <input type="radio" name="criterio" id="criterio1" value="dia"
                     onclick="mostrarReferencia();">
                     Dia
                     </label>
                  </div>
            </div>

            <!-- text input -->
            <div class="form-group col-xs-6">
               <label>Indicar Zona</label>
               <div style="display:inline;" id="mostrarZona">
                  <select name="zona" id="zona"  class="form-control">
                     <option value="1">Centro</option>
                     <option value="2">Norte</option>
                     <option value="3">Sur</option>
                     <option value="4">Saenz Peña</option>
                     <option value="5">Corrientes</option>
                     <option value="6">Todos</option>
                  </select>
               </div>
            </div>
            <!-- /.input group -->
            <div class="form-group col-xs-6">
               <label>Indicar Dia</label>
               <div style="display:inline;" id="mostrarDia">
                  <select name="dia" id="dia"  class="form-control">
                     <option value="1">Lunes</option>
                     <option value="2">Martes</option>
                     <option value="3">Miercoles</option>
                     <option value="4">Jueves</option>
                     <option value="5">Viernes</option>
                     <option value="6">Todos</option>
                  </select>
               </div>
            </div>
            <div class="form-group col-xs-4" >
               <label for="chofer" class="col-xs-4 control-label">Chofer</label>
               <input id="chofer" name="chofer" >
            </div>
            <div class="form-group col-xs-4" >
               <label for="asistente" class="col-xs-4 control-label">Asistente</label>
               <input id="asist" name="asistente">
            </div>
            <div class="form-group col-xs-4" >
               <label for="frasco" class="col-xs-4 control-label">Frascos a Entregar</label>
               <div class="col-xs-4">
                  <select name="frascos" id="frascos"  class="form-control">
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                     <option value="7">7</option>
                     <option value="8">8</option>
                     <option value="9">9</option>
                     <option value="10">10</option>
                  </select>
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
   $(function () {
       $('#datetimepicker10').datetimepicker({ locale: 'es', viewMode: 'days', format: 'DD/MM/YYYY' });
   });
</script>