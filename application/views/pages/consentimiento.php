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
 <div class="row">
  <div class="col-lg-3">
            <label>Fecha</label>
            <input type="text" class="form-control" placeholder="dd/mm/aaaa">
          </div>

     <div class="col-lg-3">
      <fieldset disabled>
        <div class="form-group">
          <label for="disabledTextInput">Número de Consentimiento</label>
           <input type="text"  id="campoDeshabilitado" class="form-control" 
             placeholder="#########">
        </div>

      </fieldset>
     </div>
  </div>
       
    

<!-- /. madre donante y bebé asociado-->
  <div class="row">
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

      <label>Domicilio de Recolección</label>
      <div class="row">

          <div class="col-lg-3">
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
             <a href="<?php echo base_url();?>index.php/page/view/consentimiento" 
                       class="btn btn-success btn-md" role="button">Confirmar</a>

          </div>
           <div class="btn-group" >
             <a href="<?php echo base_url();?>index.php/page/view" 
                       class="btn btn-danger btn-md" role="button">Cancelar</a>

          </div>
       
  
 </div>
    
</div>
</section>
</aside><!-- /.right-side -->
