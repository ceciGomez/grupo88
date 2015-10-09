<aside class="right-side">
   <div class="container">
   <h1>Registrar Consentimiento</h1>
    <h4>Buscar donante</h4>
      <p>Ingrese numero de dni de donante, será utilizado para buscar si la donante existe, caso contrario se redirigira a la pagina de alta de Donante</p>
     
   <div class="col-lg-3">
      <div class="input-group">
         <input type="text" class="form-control" placeholder="12345678">
         <span class="input-group-btn">
         <button  data-target="#compose-modal" data-toggle="modal" aria-hidden="true" class="btn btn-default" type="button">Buscar</button>
         </span>
      </div>
      <!-- /input-group -->
   </div>
   <!-- /.col-lg-3 -->
</div> <!-- fin de container-->
   <!-- COMPOSE MESSAGE MODAL -->
   <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title"><i class="fa fa-envelope-o"></i> ¡¡No existe madre donante!! </h4>
            </div>
            <div style="width:500px;margin-left:auto;margin-right:auto;">
               <div class="form-group modal-header">
                  <label>
                     <h1>El DNI ingresado es inexistente</h1>
                  </label>
                  <br><br>
                  <label>¿Desea registrar nuevo consentimiento?</label>
               </div>
               <div style="margin:right;">
                  <a href="<?php echo base_url();?>index.php/consentimiento/view/consentimiento" 
                     class="btn btn-success btn-md" role="button">Si</a>
                  <a href="<?php echo base_url();?>index.php/page/view" 
                     class="btn btn-danger btn-md" role="button">No</a>  
               </div>
            </div>
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
   </div><!-- /.modal -->
</aside>
<!-- /.right-side -->
