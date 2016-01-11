<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Eliminar un insumo
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Eliminar Insumo </li>
  </ol>
 </section>
  <section class="content">
    <form id="formInsumo" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
    action="<?php echo base_url();?>index.php/cinsumos/eliminarInsumo" >
    <div class="container">
      <h4> Va a eliminar el siguiente insumo</h4>
      <h6>si esta seguro de realizar esta acción, presione el boton "Eliminar insumo"</h6>
      <input type="hidden" name="idInsumo" value="<?php echo $unInsumo[0]->idInsumo; ?>">
      <div class="form-group">
        <label class="col-lg-2">Nombre del insumo</label>
        <input class="col-lg-2" type="text" name="insumo" 
        value="<?php echo $unInsumo[0]->insumo; ?>" disabled="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Unidad</label>
        <input class="col-lg-2" type="text" name="unidad" 
        value="<?php echo $unInsumo[0]->unidad; ?>" disabled="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Gramos</label>
        <input class="col-lg-2" type="text" name="gramos" 
        value="<?php echo $unInsumo[0]->gramos; ?>" disabled="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Stock de Reposicion</label>
        <input class="col-lg-2" type="text" name="stockReposicion" 
        value="<?php echo $unInsumo[0]->stockReposicion; ?>" disabled="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">stockCritico</label>
        <input class="col-lg-2" type="text" name="stockCritico" 
        value="<?php echo $unInsumo[0]->stockCritico; ?>" disabled="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Descripcion del Insumo</label>
        <input class="col-lg-2" type="text" name="descripcionInsumo" 
        value="<?php echo $unInsumo[0]->descripcionInsumo; ?>"disabled="">
      </div>
    </div>
    <div class="pull-right content">
      <div class="form-group">
        <button type="submit"  aria-hidden="true" id="eliminarInsumo" class="btn btn-success btn-md">Eliminar Insumo</button>
        <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
      </div>
    </div>
    </form>
  </section><!-- /.content -->    
</aside><!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/insumoinfo.js" type="text/javascript" charset="utf-8" async defer></script>