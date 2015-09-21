  <!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Registrar nuevo Consentimiento
  </h1>
  </section>
<!-- /. fecha, num consentimiento y dni-->


 <section class="content" id="cont">   
 <div class="row panel panel-primary">
       <div class="col-lg-2">
            <label>Fecha</label>
            <input name="fecha" type="text" class="form-control" placeholder="dd/mm/aaaa">
       </div>
       <!-- ////-->
    <div class="col-lg-3">

         <fieldset disabled>
            <div class="form-group">
                <label for="disabledTextInput">Número de Consentimiento</label>
               <input type="text"  id="campoDeshabilitado" class="form-control" 
                      placeholder="#########"> 
             </div>

         </fieldset>
    </div>
    <!-- ////-->
    <div class="col-lg-3"><label>Ingrese DNI de madre donante</label>
            <div class="input-group">
               <input type="text" class="form-control" placeholder="12345678">
                <span class="input-group-btn">
               <button  data-target="#compose-modal" data-toggle="modal" aria-hidden="true" class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
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
                    </div>v
                    <div style="width:500px;margin-left:auto;margin-right:auto;">
                        <div class="form-group modal-header">
                            <label><h1>El DNI ingresado es inexistente</h1></label><br><br>
                            <label>¿Desea registrar madre donante?</label>
                         </div>
                            <div style="margin:right;">
                          
                              <a href="<?php echo base_url();?>index.php/page/view/donante" 
                                  class="btn btn-success btn-md" role="button">Si</a>
                              <a href="<?php echo base_url();?>index.php/page/view" 
                                  class="btn btn-danger btn-md" role="button">No</a>  
                            </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
</div><!-- row panel panel-primary -->
<!-- /. madre donante y bebé asociado-->
  <div class="row panel-group">

     <div class="col-lg-3">
      <fieldset disabled>
        <div class="form-group">
          <label for="disabledTextInput">Nombre de Madre Donante</label>
           <input type="text"  id="campoDeshabilitado" class="form-control" 
             placeholder="Loren Ipsum">
        </div>

      </fieldset>
     </div>

     <div class="col-lg-3">
      <fieldset disabled>
        <div class="form-group">
          <label for="disabledTextInput">Nombre de Bebé</label>
           <input type="text"  id="campoDeshabilitado" class="form-control" 
             placeholder="bebecito">
        </div>

      </fieldset>
     </div>

     <div class="col-lg-3">
      <fieldset disabled>
        <div class="form-group">
          <label for="disabledTextInput">Edad Gestacional de Bebé</label>
           <input type="text"  id="campoDeshabilitado" class="form-control" 
             placeholder="##">
        </div>

      </fieldset>
     </div>
  </div>
    
<!-- periodo de donacion -->
  <div> 
   <label>Período de donación</label>
   <div class="row">
  
        <div class="col-lg-3">
            <label>desde</label>
            <input type="text" class="form-control" placeholder="dd/mm/aaaa">
          </div>

        <div class="col-lg-3">
            <label>hasta</label>
            <input type="text" class="form-control" placeholder="dd/mm/aaaa">
          </div>

  <!-- /. pedido de serologia -->
    <label>Pedido de Serología</label>
    <div>
          <div class="radio">
             <label>
                 <input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>
              Si
           </label>
               
            <label>
                <input type="radio" name="opciones" id="opciones_2" value="opcion_2">
                No
           </label>
         </div>
      </div>
    </div>
 </div>
<!-- direccion -->

      
      <div class="row panel panel-primary" ><label>Domicilio de Recolección</label>
        <div class="row">
          <div class="col-lg-3 ">
            <label>Calle</label>
            <input type="text" class="form-control" placeholder="">
          </div>

          <div class="col-lg-1">
            <label>Número</label>
            <input type="text" class="form-control" placeholder="">
          </div>

          <div class="col-lg-3">
            <label>Barrio</label>
            <input type="text" class="form-control" placeholder="">
          </div>

          <div class="col-lg-1">
            <label>Piso</label>
            <input type="text" class="form-control" placeholder="">
          </div>
         
          <div class="col-lg-1">
            <label>Dpto.</label>
            <input type="text" class="form-control" placeholder="">
          </div>

          <div class="col-lg-1">
            <label>Mz.</label>
            <input type="text" class="form-control" placeholder="">
          </div>

          <div class="col-lg-1">
            <label>Pc.</label>
            <input type="text" class="form-control" placeholder="">
          </div>

        </div>
        <br>
        </div>

<!-- /. permiso de foto y zona-->

   <div>
      <div class="row">   
            <!-- Zona -->
          <div class="col-xs-3">
            <!-- text input -->
                <div class="form-group">
                    <label>Zona</label>
                    <div>
                      <select class="form-control">
                        <option>Zona 1</option>
                        <option>Zona 2</option>
                        <option>Zona 3</option>
                        <option>Zona 4</option>
                        <option>Zona 5</option>
                      </select>
                    </div>
                </div>
          </div>
        </div> 

    <!--publicar foto-->  
       <label>Permite publicar foto</label>
          <div class="radio">
             <label>
                 <input type="radio" name="opcion" id="opciones_3" value="opcion_3" checked>
              Si
           </label>
          </div>
         <div class="radio">
            <label>
                <input type="radio" name="opcion" id="opciones_4" value="opcion_4">
                No
           </label>
         </div>
   </div>

 <!-- boton confirmar -->     
          <div class="btn-group" >
             <a href="<?php echo base_url();?>index.php/consentimiento/view/consentimiento" 
                       class="btn btn-success btn-md" role="button">Confirmar</a>

          </div>
           <div class="btn-group" >
             <a href="<?php echo base_url();?>index.php/page/view" 
                       class="btn btn-danger btn-md" role="button">Cancelar</a>

          </div>
       
  
 
</section>
</aside><!-- /.right-side -->
