<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos del Bebe Receptor
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-home"></i> Home </a></li>
   <li><a href="#"> Consentimiento</a></li>
   <li class="active"> Bebe Receptor </li>
  </ol>
 </section>
 <!-- Main content -->
 <section class="content" id="cont">                
  <div class="row">
    <form id="formularioBebereceptor" role="form" method="POST" action="<?php echo base_url()?>index.php/cbebe/altaBebereceptor" >
       <div class="col-xs-6">
        <!-- text input -->
        <div class="col-xs-6">
        <!-- text input -->
         <div class="form-group">
          <label> Nombre del Bebe </label>
          <input type="text" id="nombrebr" class="form-control" placeholder="Sol" name="nombrebr"/>
         </div>
        </div>
        <div class="col-xs-6">
        <!-- text input -->
          <div class="form-group">
            <label> Apellido del Bebe </label>
            <input type="text" id="apellidobr" class="form-control" placeholder="Rios" name="apellidobr"/>
          </div>
        </div>
         <div class="col-xs-6">
        <!-- text input -->
        <div class="form-group">
          <label> DNI del Bebe </label>
          <input type="text" id="dnibr" class="form-control" placeholder="11111111" name="dnibr"/>
        </div>
      </div>
        <div class="col-xs-6">
        <!-- text input -->
         <div class="form-group">
           <label> Fecha de Nacimiento del Bebe </label>
           <div class="input-group">
               <div class="input-group-addon">
                   <i class="fa fa-calendar"></i>
               </div>
               <input type="text" class="form-control" id="fnacbr"
               data-inputmask="'alias': 'dd/mm/YYYY'" data-mask name="fnacbr"placeholder="dd/mm/aaaa"/>
           </div><!-- /.input group -->
       </div><!-- /.form group -->
       </div>
           <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Lugar de Nacimiento del Bebe </label>
                    <input type="text" id="lugarbr" class="form-control"
                    placeholder="Resistencia" name="lugarNacbr"/>
                </div>
            </div>
             <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Madre de Bebe </label>
                    <input type="text" id="nombreMbr" class="form-control" 
                    placeholder="Marina" name="nombreMbr"/>
                </div>
            </div>
             <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Padre del Bebe </label>
                    <input type="text" id="nombrePbr" class="form-control" 
                    placeholder="Lucas" name="nombrePbr"/>
                </div>
             </div>
             <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Direccion </label>
                    <input type="text" id="direcbr" class="form-control" 
                    placeholder="Resistencia" name="direcbr"/>
                </div>
             </div>
              <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Edad Gestacional </label>
                    <input type="text" id="edadGestbr" class="form-control" 
                    placeholder="meses" name="edadGestbr"/>
                </div>
             </div>
       </form>
      
       <div class="pull-right"> 
    
          <div class="form-group">
            <button data-target="#compose-modal"  data-toggle="modal" aria-hidden="true" id="guardarBr" class="btn btn-success btn-lg"> Guardar Bebe </button>
         </div>                  
      </div>
      </div>

   </div>
   <!-- right column -->
  </div>   <!-- /.row -->
 </section><!-- /.content -->

 <!-- COMPOSE MESSAGE MODAL -->
  <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title"><i class="fa fa-check"></i> Detalle de Bebe Asociado </h4>
              </div>
              <div>
                <label> VA A GUARDAR LOS SIGUIENTES DATOS </label>
              </div>
              <div style="width:500px;margin-left:auto;margin-right:auto;">
                  <div class="form-group modal-header">
                     
                      <div id="bebereceptorinfonombre">
                          <label> Nombre: <span></span> </label>
                      </div>
                      <div id="bebereceptorinfoapellido">
                          <label> Apellido: <span></span> </label>
                      </div>
                       <div id="bebereceptorinfodni">
                          <label> DNI: <span></span> </label>
                      </div>
                      <div id="bebereceptorinfofecha">
                          <label> Fecha de Nacimiento: <span></span> </label>
                      </div>
                      <div id="bebereceptorinfolugar">
                          <label> Lugar de Nacimiento: <span></span> </label>
                      </div>
                      <div id="bebereceptorinfonombrem">
                          <label> Nombre de la Madre: <span></span> </label>
                      </div>
                      <div id="bebereceptorinfonombrep">
                          <label> Nombre de la Padre: <span></span> </label>
                      </div>
                       <div id="bebereceptorinfodirec">
                          <label> Direccion: <span></span> </label>
                      </div>
                       <div id="bebereceptorinfoedad">
                          <label> Edad Gestacional: <span></span> </label>
                      </div>
                  </div>
                  <div style="margin:auto;">
                          
                      <button id="guardaBr" data-dismiss="modal"  data-toggle="modal" data-target="#mssg-modal" aria-hidden="true"
                       class="btn btn-success btn-lg">Confirmar
                      </button>
                      <button data-dismiss="modal" aria-hidden="true" 
                      class="btn btn-success btn-lg">Descartar 
                      </button>

                      </div>
                  </div>
              </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</aside><!-- /.right-side -->

<script src="<?php echo base_url();?>assets/internals/js/bebereceptorinfo.js" type="text/javascript" charset="utf-8" async defer></script>
