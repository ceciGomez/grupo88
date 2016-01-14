<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Editar de Centros de Recolección 
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
   <li><a href="#">Centro de Recolección</a></li>
   <li class="active">Editar Centro de Recoleccion </li>
  </ol>
 </section>
     <section class="content" id="cont">                
  <div class="row">
    <form data-toggle="validator" id="formularioCentros" role="form" method="POST" action="<?php echo base_url()?>index.php/centrosRec/editarCentro">
    
       <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                      <div class="col-xs-6">
                        <input required type="hidden" id="idCentro" class="form-control" name="idCentro" value="<?php echo $unCentro[0]->idCentroRecoleccion;?>"/>
                      <!-- text input -->
                       <div class="form-group">
                        <label>Nombre de Centro Recolección</label>
                        <input required type="text" id="nombre" class="form-control" placeholder="nombre del centro" name="nombre" value="<?php echo $unCentro[0]->nombreCentro;?>"/> 
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <span class="help-block with-errors">* Campo Requerido</span>
                       </div>
                      </div>
                    <div class="col-xs-6">
                    <!-- text input -->
                     <div class="form-group">
                      <label>Direccion</label>
                      <input required type="text" id="direccion" class="form-control" placeholder="direccion del centro" name="direccion" value="<?php echo $unCentro[0]->direccionCentro;?>"/>
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
                  data-inputmask='"mask": "(999) 999-999999"' data-mask value="<?php echo $unCentro[0]->telefonoCentro;?>" />
            </div>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <span class="help-block with-errors">* Campo Requerido</span>
            <!-- /.input group -->
         </div>
         <!-- /.form group -->
       </div>

       
        <div class="pull-right-side col-lg-12" >
            <div class="form-group" style="margin:auto; float: right">
              <a href="<?php echo base_url()?>index.php/centrosRec/view/verCentrosR?>"
                      class="btn btn-danger btn-md" role="button">Cancelar</a>
               <button  type="submit" class="btn btn-success btn-md" id="guardaEditar">Guardar</button>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

  </form>
</div>
    </section>
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