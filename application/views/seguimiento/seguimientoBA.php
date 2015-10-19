<script>
var urlbase="<?php echo base_url();?>";
</script>
<!-- 
   Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Seguimiento del Bebe Asociado
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li class="active">Seguimiento de Bebe Asociado</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content" id="cont">
      <div class="row">
         <form id="formularioSeguimientoBa" role="form" method="POST" action="<?php echo base_url()?>index.php/cseguimiento/altaSeguimientoBa" >
            <div style="margin:0 auto;background:DarkSeaGreen;border-radius:8px;overflow: hidden;
               padding:15px 5px" class="col-xs-12">   
               <div class="col-xs-4">
                  <!-- text input -->
                  <div class="form-group">
                     <label>Nro. de Bebe Asociado:</label>
                  </div>
                     <input class="form-control" id="idba" name="idba" disabled="" 
                     value="<?php echo $unAsociado[0]->idBebeAsociado;?>">
               </div>
               <div class="col-xs-4">
                  <!-- text input -->
                  <div class="form-group">
                     <label>Nombre:</label>
                  </div>
                     <input class="form-control" id="nombreba" name="nombreba" disabled="" 
                     value="<?php echo $unAsociado[0]->nombreBebeAsociado;?>">
               </div>
                  <!-- text input -->
               <div class="col-xs-4">
                  <div class="form-group">
                     <label>Apellido:</label>
                  </div>
                    <input class="form-control" id="apellidoba" disabled="" 
                    value="<?php echo $unAsociado[0]->apellidoBebeAsociado;?>">
               </div>
            </div>
             <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Fecha de Seguimiento:</label> <!-- ver como tomar la fecha desde sistema -->
                  <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                 <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                 </span>
                                 <input type="text" class="form-control" id="fsegba" data-inputmask="'alias': 'dd/mm/yyyy'" 
                                 data-mask name="fechaBa" placeholder="dd/mm/aaaa" required/>

                            </div>
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Médico:</label>
                  <input type="text" id="medico" class="form-control" placeholder="Lucio Gomez" name="medicoBa"/>
               </div>
            </div>

            <div class="col-xs-6">
               <div class="form-group">
                  <label>Altura:</label>
                  <input type="text" id="altura" placeholder="cantidad en cm" class="form-control"
                      name="alturaBa"/>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Peso:</label>
                  <input type="text" id="peso" class="form-control" 
                     placeholder="cantidad en gramos" name="pesoBa"/>
               </div>
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Perimetro Cefalico:</label>
                  <input type="text" id="perimCef" class="form-control" 
                     placeholder="cantidad en cm" name="perCefBa"/>
               </div>
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Observaciones:</label>
                  <input type="text" id="obsba" class="form-control" 
                     placeholder="Observaciones" name="obsBa"/>
               </div>
            </div>

         </form>

         <div class="pull-right content">
            <div class="form-group">
             
               <button type="button" data-toggle="modal" aria-hidden="true" 
                  id="guardaSeguimientoBa" data-target="#compose-modal" class="btn btn-success btn-md">Guardar Seguimiento</button>
            </div>
         </div>

      </div>
      </div>
      <!-- right column -->
      </div>   <!-- /.row -->
   </section>
   <!-- /.content -->
   <!-- COMPOSE MESSAGE MODAL -->
   <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title"><i class="fa fa-check"></i> Seguimiento del Bebe Asociado </h4>
            </div>
            <div class="content">
               <label> VA A GUARDAR LO SIGUIENTE </label>
            </div>
            <div style="width:500px;margin-left:auto;margin-right:auto;" class="container">
               <div class="form-group modal-header">
                  <div id="seguimientoinfonro">
                     <label></label>
                  </div>
                  <div id="seguimientobainfoidba">
                     <label>Nro. de Bebe Asociado: <span></span></label>
                  </div>
                  <div id="seguimientobainfofecha">
                     <label>Fecha: <span></span></label>
                  </div>
                  <div id="seguimientobainfomedico">
                     <label>Medico: <span></span></label>
                  </div>
                  <div id="seguimientobainfoaltura">
                     <label>Altura: <span></span></label>
                  </div>
                  <div id="seguimientobainfopeso">
                     <label>Peso: <span></span></label>
                  </div>
                  <div id="seguimientobainfopercef">
                     <label>Perimetro Cefalico: <span></span></label>
                  </div>
                  <div id="seguimientobainfoobs">
                     <label>Observaciones: <span></span></label>
                  </div>
               </div>
               <div style="margin:auto;">
                  <button type="button" id="guardaSegba" data-dismiss="modal"  data-toggle="modal" 
                  data-target="#mssg-modal" aria-hidden="true" class="btn btn-success btn-lg">Confirmar
                  </button>
                  <button data-dismiss="modal" aria-hidden="true" 
                  href="<?php echo base_url();?>index.php/page/view" class="btn btn-success btn-lg">Descartar 
                  </button>
                  
               </div>
               <br><br>
            </div>
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
   </div><!-- /.modal -->
</aside>
<!-- /.right-side -->

<script src="<?php echo base_url();?>assets/internals/js/seguimientoba.js" type="text/javascript" charset="utf-8" async defer></script>

<script type="text/javascript">
   $(function () {
       $('#datetimepicker1').datetimepicker({ locale: 'es', format: 'DD/MM/YYYY' });
   });
</script>