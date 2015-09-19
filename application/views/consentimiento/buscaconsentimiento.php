 <aside class="right-side">
 <h1>Ingrese número de documento de Donante</h1>
 <div class="col-lg-3">
           <div class="input-group">
              
               <input type="text" class="form-control" placeholder="12345678">
                     <span class="input-group-btn">
                  <button  data-target="#compose-modal" data-toggle="modal" aria-hidden="true" class="btn btn-default" type="button">Buscar</button>
                     </span>
           </div><!-- /input-group -->
        </div><!-- /.col-lg-3 -->
     
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
                            <label><h1>El DNI ingresado es inexistente</h1></label><br><br>
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
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
   
   </aside><!-- /.right-side -->