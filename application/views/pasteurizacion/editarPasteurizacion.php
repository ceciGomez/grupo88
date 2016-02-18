<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Editar información de Pasteurizacion
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li><a>Pasteurizacion </a></li>
         <li class="active">Editar Pasteurización</li>
      </ol>
   </section>
   <section class="content">
     <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <form id="formEditarPasteurizacion" name="formEditarPasteurizacion" method="POST" role="form" action="<?php echo base_url()?>index.php/cpasteurizacion/editarPasteurizacion">
                        <input value="<?php echo $unaPasteurizacion[0]->idPasteurizacion;?>" type="hidden" id="nroPasteurizacion" name="nroPasteurizacion">
                        <div class="row">
                           <div class="col-md-6">
                              <label >Nro de Pasteurización</label>
                              <p class="form-control-static"><?php echo $unaPasteurizacion[0]->idPasteurizacion; ?></p>
                           </div>
                           <div class="row">
                             <div class="col-md-6">
                                 <div class="row col-md-11">
                                    <label>Fecha de Pasteurización</label>
                                      <div class="form-group" >
                                       <div class='input-group date' id='datetimepicker2'>
                                          <span class="input-group-addon">
                                          <span class="fa fa-calendar"></span>
                                          </span>
                                          <input type="text" class="form-control" id="fpasteurizacion" name="fpasteurizacion" 
                                           data-inputmask="'alias': 'dd/mm/yyyy'" value="<?php echo $unaPasteurizacion[0]->fechaPasteurizacion; ?>"
                                           data-mask name="fpasteurizacion" placeholder="dd/mm/aaaa" required/>
                                       </div>
                                    </div>  
                                 </div>
                           </div>
                           </div>
                           <div class="col-md-6">
                              <label>Responsable</label>
                              <input value="<?php echo $unaPasteurizacion[0]->responsable;?>" id="responsable" class="form-control" name="responsable"/>
                           </div>
                           </div><br>
                           <div class="col-md-offset-2">
                           <div>
                              <a class="btn btn-primary btn-sm" href="javascript:window.history.back();">Volver</a>
                              <button  type="submit" class="btn btn-success btn-sm" id="botonguardaEditar">Guardar
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
          </div>
      </div>
   </section>
   </aside>

