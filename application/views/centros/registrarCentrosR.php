
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos de Centros de Recolección 
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
   <li><a href="#">Centro de Recolección</a></li>
   <li class="active"> Registrar Centro de Recoleccion </li>
  </ol>
 </section>
     <section class="content" id="cont">                
  <div class="row">
    <form data-toggle="validator" id="formularioCentros" role="form" method="POST" action="<?php echo base_url()?>index.php/centrosRec/altaCentro">
        <div class="col-xs-6">
        <!-- text input -->
         <div class="form-group">
          <label>Nombre</label>
          <input required type="text" id="nombre" class="form-control" placeholder="nombre del centro" name="nombre"/>
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <span class="help-block with-errors">* Campo Requerido</span>
         </div>
        </div>
        <div class="col-xs-6">
        <!-- text input -->
         <div class="form-group">
          <label>Direccion</label>
          <input required type="text" id="direccion" class="form-control" placeholder="direccion del centro" name="direccion"/>
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <span class="help-block with-errors">* Campo Requerido</span>
         </div>
        </div>
        <div class="col-xs-6">
         <div class="form-group">
            <label>Nro de Telefono:</label>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="input-group">
               <div class="input-group-addon">
                  <i class="fa fa-phone"></i>
               </div>
               <input required type="num" id="telefono" onkeypress = "return validarNum(event)" class="form-control" name="telefono"
                  data-inputmask='"mask": "(999) 999-999999"' data-mask />
            </div>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <span class="help-block with-errors">* Campo Requerido</span>
            <!-- /.input group -->
         </div>
         <!-- /.form group -->
       </div>

       
        <div class="pull-right-side content col-lg-12" >
            <div class="form-group" style="margin:auto; float: right">
               <button type="reset" class="btn btn-danger md">Cancelar</button>
               <button type="button" data-toggle="modal" aria-hidden="true" 
                  id="guardaCentro" data-target="#compose-modal" class="btn btn-success btn-md">Guardar Centro</button>
            </div>
        </div>
    </div>
  </form>

    </section>
   <!-- COMPOSE MESSAGE MODAL -->
   <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title"><i class="fa fa-check"></i> Detalle Centro de Recoleccion </h4>
            </div>
            <div class="content">
               <label> VA A GUARDAR LO SIGUIENTE:</label>
            </div>
            <div style="width:500px;margin-left:auto;margin-right:auto;" class="container">
                <div class="form-group modal-header">
                  
                  <div id="centroinfonombre">
                     <label>Nombre: <span></span></label>
                  </div>
                  <div id="centroinfodireccion">
                     <label>Dirección: <span></span></label>
                  </div>
                  <div id="centroinfotelefono">
                     <label>Teléfono: <span></span></label>
                  </div>
                  
               </div>
               <div style="margin:auto; float: right">
                  <button data-dismiss="modal" aria-hidden="true" 
                     class="btn btn-danger btn-md">Descartar 
                  </button>
                  <button type="button" id="guardarTodo" data-dismiss="modal"  data-toggle="modal" data-target="#mssg-modal" aria-hidden="true"
                     class="btn btn-success btn-md">Confirmar
                  </button>
               </div>
               <br><br>
            </div>
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
   </div><!-- /.modal -->
</aside>
<!-- /.right-side -->

<script src="<?php echo base_url();?>assets/internals/js/centrosinfo.js" type="text/javascript" charset="utf-8" async defer></script>

<script>
$('#form').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
    // handle the invalid form...
  } else {
    // everything looks good!
  }
})
</script>