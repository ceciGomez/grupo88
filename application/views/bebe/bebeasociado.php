b<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos del Bebe Asociado
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">Consentimiento</a></li>
   <li class="active">Bebe Asociado </li>
  </ol>
 </section>

 <!-- Main content -->
 <section class="content" id="cont">                
  <div class="row">
    <form role="form" method="POST" action="<?php echo base_url()?>index.php/page/altaDonante" >
       <div class="col-xs-6">
        <!-- text input -->
         <div class="form-group">
          <label>Numero de Bebe Asociado</label>
          <input type="text" id="nya" class="form-control" placeholder="1222222" disabled name="nombre"/>
         </div>
        </div>
        <div class="col-xs-6">
        <!-- text input -->
         <div class="form-group">
          <label>Nombre</label>
          <input type="text" id="nya" class="form-control" placeholder="Juanita" name="nombre"/>
         </div>
        </div>
        <div class="col-xs-6">
        <!-- text input -->
          <div class="form-group">
            <label>Apellido</label>
            <input type="text" id="nya" class="form-control" placeholder="Molina" name="apellido"/>
          </div>
        </div>
        <div class="col-xs-6">
        <!-- text input -->
         <div class="form-group">
           <label>Fecha de Nacimiento:</label>
           <div class="input-group">
               <div class="input-group-addon">
                   <i class="fa fa-calendar"></i>
               </div>
               <input type="text" class="form-control" 
               data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="fecha"/>
           </div><!-- /.input group -->
       </div><!-- /.form group -->
       </div>
        <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label>Lugar de Nacimiento</label>
                    <input type="text" id="nya" class="form-control" 
                    placeholder="Resistencia - Chaco" name="lnac"/>
                </div>
            </div>
            <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label>Localidad</label>
                    <input type="text" id="nya" class="form-control" 
                    placeholder="Resistencia" name="localidad"/>
                </div>
            </div>
           
         
       
       </form>
      
      
    </div>
    <div class="pull-right">
  
     <div class="form-group">
    

      <button data-target="#compose-modal"  data-toggle="modal" aria-hidden="true" 
             class="btn btn-success btn-lg">Guardar Bebe Asociado y Regresar a Consentimiento</button>
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
                        <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Detalle de Bebe Asociado </h4>
                    </div>
                    <div style="width:500px;margin-left:auto;margin-right:auto;">
                        <div class="form-group modal-header">
                            <label>Nombre y Apellido del Bebe Asociado : <b>Juanita Doe</b> </label>
                            <label>Numero de Documento : <b>32.874.586</b> </label>
                            <label> Fecha de Nacimient : <b>13/10/2014</b> </label>
                        </div>
                        
                           
                            <br/>
                            
                            <div style="margin:auto;">
                                
                            <button data-dismiss="modal"  data-toggle="modal" data-target="#mssg-modal" aria-hidden="true" class="btn btn-success btn-lg">Guardar Bebe Asociado</button>
                            <button data-dismiss="modal" aria-hidden="true" class="btn btn-success btn-lg">Descartar Bebe Asociado</button>

                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

</aside><!-- /.right-side -->
