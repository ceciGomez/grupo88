 <aside class="right-side">
  <div class="input-group">
    <div class="form-group modal-header">
    <h4>Ingrese número de documento del Bebe Asociado</h4>
    </div>
    <div class="col-xs-5">
       <div class="input-group">              
           <input type="text" class="form-control" placeholder="12345678">
              <span class="input-group-btn">
              <button  data-target="#compose-modal" data-toggle="modal" aria-hidden="true" class="btn btn-default" type="button" >Buscar</button>
              </span>
       </div><!-- /input-group -->
    </div><!-- /.col-lg-3 -->
  </div>  
 <!-- COMPOSE MESSAGE MODAL -->
        <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Bebe inexistenete o Sin serología </h4>
                    </div>
                    <div style="width:500px;margin-left:auto;margin-right:auto;">
                        <div class="form-group modal-header">
                            <?php
                              $galletas = true;
                              if($galletas == true) {
                              echo 'Hay galletas';
                              } else {
                              echo 'No hay galletas';
                              }
                            ?>
                         </div>
                         <div style="margin:right;">
                          <a href="<?php echo base_url();?>index.php/page/view" class="btn btn-danger btn-md" role="button">No</a>                           
                          <a href="<?php echo base_url();?>index.php/cseguimiento/view/seguimientoBa/<?php echo $value->dniBebeAsociado?>" class="btn btn-success btn-md" role="button">Si</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content /<?php echo $value->dniBebeAsociado?>-->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
   
   </aside><!-- /.right-side -->