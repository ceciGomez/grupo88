<script>
var urlbase="<?php echo base_url();?>";
</script>
<!-- 
   Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Seguimiento del Bebe Receptor
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i>Home</a></li>
         <li class="active">Seguimiento de Bebe Receptor</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content" id="cont">
      <div class="row">
         <form data-toggle="validator" id="formularioSeguimientoBr" role="form" method="POST" action="<?php echo base_url()?>index.php/cseguimiento/altaSeguimientoBr" >
            <div style="margin:0 auto;background:white;border-radius:8px;overflow: hidden;
               padding:15px 5px" class="col-xs-12">   
               <div class="col-xs-4">
                  <!-- text input -->
                  <div class="form-group">
                     <label>Nro. de Bebe Receptor:</label>
                  </div>
                     <input class="form-control" id="idbr" name="idbrvisible" disabled=""
                     value="<?php echo $unReceptor[0]->idBebeReceptor;?>">
               </div>
               <div class="col-xs-4" style="display:none">
                  <!-- text input -->
                  <div class="form-group">
                     <label>Nro. de Bebe Receptor:</label>
                  </div>
                     <input class="form-control" id="idbr" name="idbr"  
                     value="<?php echo $unReceptor[0]->idBebeReceptor;?>">
               </div>
               <div class="col-xs-4">
                  <!-- text input -->
                  <div class="form-group">
                     <label>Nombre:</label>
                  </div>
                     <input class="form-control" id="nombrebr" name="nombrebr" disabled="" 
                     value="<?php echo $unReceptor[0]->nombreBebeReceptor;?>">
               </div>
                  <!-- text input -->
               <div class="col-xs-4">
                  <div class="form-group">
                     <label>Apellido:</label>
                  </div>
                    <input class="form-control" id="apellidobr" disabled=""
                    value="<?php echo $unReceptor[0]->apellidoBebeReceptor;?>">
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
               </div>
            </div>
             <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Fecha de Seguimiento:</label> <!-- ver como tomar la fecha desde sistema -->
                  <div class="form-group">
                            <div class='input-group date' id='datetimepicker2'>
                                 <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                 </span>
                                 <input required type="text" class="form-control" id="fsegbr" data-inputmask="'alias': 'dd/mm/yyyy'" 
                                 data-mask name="fechaBr" placeholder="dd/mm/aaaa" required/>
                            </div>
                            <span class="help-block with-errors">* Campo Requerido</span>
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Médico:</label>
                  <input required type="text" id="medico" class="form-control" placeholder="Escriba el nombre y apellido del médico" name="medicoBr"/>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <span class="help-block with-errors">* Campo Requerido</span>
               </div>
            </div>

            <div class="col-xs-6">
               <div class="form-group">
                  <label>Altura:</label>
                  <input type="text" id="altura" placeholder="Escriba la cantidad en cm" class="form-control"
                      name="alturaBr"required/>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <span class="help-block with-errors">* Campo Requerido</span>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Peso:</label>
                  <input type="text" id="peso" class="form-control" 
                     placeholder="Escriba la cantidad en gramos" name="pesoBr" required/>
                     <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <span class="help-block with-errors">* Campo Requerido</span>
               </div>
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Perimetro Cefalico:</label>
                  <input type="text" id="perimCef" class="form-control" 
                     placeholder="Escriba la cantidad en cm" name="perCefBr" required/>
                     <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <span class="help-block with-errors">* Campo Requerido</span>
               </div>
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Observaciones:</label>
                  <input type="text" id="obsbr" class="form-control" 
                     placeholder="Escriba aquí observaciones" name="obsBr"/>
               </div>
            </div>

         </form>

         <div class="pull-right content">
            <div class="form-group">
               <button data-dismiss="modal" aria-hidden="true" href="<?php echo base_url();?>index.php/cseguimiento/view/seguimientoBr1"
                class="btn btn-danger btn-md">Descartar</button>
               <button type="button" data-toggle="modal" aria-hidden="true" id="guardaSeguimientoBr"
                data-target="#compose-modal" class="btn btn-success btn-md">Guardar Seguimiento</button>

               
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
               <h4 class="modal-title"><i class="fa fa-check"></i> Seguimiento del Bebe Receptor </h4>
            </div>
            <div class="content">
               <label> VA A GUARDAR LO SIGUIENTE </label>
            </div>
            <div style="width:500px;margin-left:auto;margin-right:auto;" class="container">
               <div class="form-group modal-header">
                  <div id="seguimientoinfonro">
                     <label></label>
                  <div id="seguimientobrinfofechar">
                     <label>Fecha: <span></span></label>
                  </div>
                  <div id="seguimientobrinfomedico">
                     <label>Medico: <span></span></label>
                  </div>
                  <div id="seguimientobrinfoaltura">
                     <label>Altura: <span></span></label>
                  </div>
                  <div id="seguimientobrinfopeso">
                     <label>Peso: <span></span></label>
                  </div>
                  <div id="seguimientobrinfopercef">
                     <label>Perimetro Cefalico: <span></span></label>
                  </div>
                  <div id="seguimientobrinfoobs">
                     <label>Observaciones: <span></span></label>
                  </div>
               </div>
               <div style="margin:auto;">
                  <button data-dismiss="modal" aria-hidden="true" 
                  href="<?php echo base_url();?>index.php/cseguimiento/view/seguimientoBr1" class="btn btn-danger btn-md">Descartar 
                  </button>
                  <button type="button" id="guardaSegbr" data-dismiss="modal"  data-toggle="modal" 
                  data-target="#mssg-modal" aria-hidden="true" class="btn btn-success btn-md">Confirmar
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

<script src="<?php echo base_url();?>assets/internals/js/seguimientobr.js" type="text/javascript" charset="utf-8" async defer></script>


<script>
$('#form').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
    // handle the invalid form...
  } else {
    // everything looks good!
  }
})
</script>