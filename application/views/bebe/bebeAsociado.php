<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos del Bebe Asociado a la Donacion
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-home"></i> Home </a></li>
   <li><a href="#"> Consentimiento</a></li>
   <li class="active"> Bebe Asociado </li>
  </ol>
 </section>
 <!-- Main content -->
 <section class="content" id="cont">                
  <div class="row">
    <form id="formularioBebeasociado" role="form" method="POST" action="<?php echo base_url()?>index.php/cbebe/altaBebeasociado" >
        <div class="col-xs-6">
        <!-- text input -->
         <div class="form-group">
          <label> Nombre del Bebe </label>
          <input type="text" id="nombreba" class="form-control" placeholder="Flor" name="nombrebebea"/>
         </div>
        </div>
        <div class="col-xs-6">
        <!-- text input -->
          <div class="form-group">
            <label> Apellido del Bebe </label>
            <input type="text" id="apellidoba" class="form-control" placeholder="Perez" name="apellidobebea"/>
          </div>
        </div>
         <div class="col-xs-6">
        <!-- text input -->
        <div class="form-group">
          <label> DNI del Bebe </label>
          <input type="text" id="dniba" class="form-control" placeholder="11111111" name="dnibebea"/>
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
               <input type="text" class="form-control" id="fnacba"
               data-inputmask="'alias': 'dd/mm/YYYY'" data-mask name="fechabebea"placeholder="dd/mm/aaaa"/>
           </div><!-- /.input group -->
       </div><!-- /.form group -->
       </div>
            <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Edad Gestacional </label>
                    <input type="text" id="edadgestba" class="form-control" 
                    placeholder="meses" name="edadgestba"/>
                </div>
            </div>
            <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Lugar de Nacimiento del Bebe </label>
                    <input type="text" id="lugarbebea" class="form-control"
                    placeholder="Resistencia" name="lugarbebea"/>
                </div>
            </div>
       </form>
      
      <div class="pull-right">
  
        <div class="form-group">
          <button data-target="#compose-modal"  data-toggle="modal" aria-hidden="true" id="guardarBebea" class="btn btn-success btn-lg"> Guardar Bebe </button>
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
                <label> VA A GUARDAR LO SIGUIENTE </label>
              </div>
              <div style="width:500px;margin-left:auto;margin-right:auto;">
                  <div class="form-group modal-header">
                      <!--<div id="bebeasocinfonro">
                          <label></label>
                      </div> -->
                      <div id="bebeasocinfonombre">
                          <label> Nombre: <span></span> </label>
                      </div>
                      <div id="bebeasocinfoapellido">
                          <label> Apellido: <span></span> </label>
                      </div>
                       <div id="bebeasocinfodni">
                          <label> DNI: <span></span> </label>
                      </div>
                      <div id="bebeasocinfofecha">
                          <label> Fecha de Nacimiento: <span></span> </label>
                      </div>
                      <div id="bebeasocinfoedad">
                          <label> Edad Gestacional: <span></span> </label>
                      </div>
                      <div id="bebeasocinfolugar">
                          <label> Lugar de Nacimiento: <span></span> </label>
                      </div>
                  </div>
                  <div style="margin:auto;">
                          
                      <button id="guardaBebea" data-dismiss="modal"  data-toggle="modal" data-target="#mssg-modal" aria-hidden="true"
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

<script src="<?php echo base_url();?>assets/internals/js/bebeasociadoinfo.js" type="text/javascript" charset="utf-8" async defer></script>
