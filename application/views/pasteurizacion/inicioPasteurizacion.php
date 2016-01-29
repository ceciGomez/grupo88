<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
       Pasteurización
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="#">Pasteurización</a></li>
         <li class="active">Nueva Pasteurización</li>
      </ol>
   </section>
   <section class="content">
      
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                   <form id="regPasteurizacion" name="registrarPasteurizacion" method="POST" role="form" action="<?php echo base_url()?>index.php/cpasteurizacion/registrarPasteurizacion">
                        <div class="row">
                           <div class="col-md-12">
                               
                                 <label class="col-md-5">Fecha de Pasteurizacion</label>
                                 <div class="form-group">
                                 <div class='input-group date'id='datetimepicker2' > <!---->
                                 <span class="input-group-addon">
                                 <span class="fa fa-calendar"></span>
                                 </span>
                                 <input class="col-md-7" type="text" class="form-control" id="fpasteurizacion" name="fpasteurizacion" 
                                  data-inputmask="'alias': 'dd/mm/yyyy'" 
                                  data-mask name="fpasteurizacion" placeholder="dd/mm/aaaa" required/>
                                 </div>
                                 </div>  
                                 </div>
                           </div>
                           <div class="row">
                                 <div class="col-md-12">
                                 <label class="col-md-5">Responsable</label>
                                 <input class="col-md-5" type="text" id="responsable" class="form-control" name="responsable" required/>
                                 </div>
                          </div> <br>
                          <div class="row">
                           <div class="form-group container col-md-offset-2">
                                 <button type="button"  aria-hidden="true" 
                                 id="botonRegPasteu" class="btn btn-success btn-md">Iniciar Pasteurizacion</button>
                                 <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
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
<script src="<?php echo base_url();?>assets/internals/js/pasteurizacioninfo.js" type="text/javascript" charset="utf-8" async defer></script>
