<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Agregar un nuevo Insumo
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Alta Insumo </li>
  </ol>
 </section>
  <section class="content">
    <form id="formInsumo" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
    action="<?php echo base_url();?>index.php/cinsumos/altaInsumo" >
    <div class="container">
      <div class="form-group">
        <label class="col-lg-2">Nombre del Insumo</label>
        <input class="col-lg-2" type="text" name="nombreInsumo" value="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Unidad</label>
        <input class="col-lg-2" type="text" name="unidad" value="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Gramos</label>
        <input class="col-lg-2" type="text" name="gramos" value="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Stock de Reposicion</label>
        <input class="col-lg-2" type="text" name="stockReposicion" value="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Stock Critico</label>
        <input class="col-lg-2" type="text" name="stockCritico" value="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Descripcion del Insumo</label>
        <input class="col-lg-2" type="text" name="descripcionInsumo" value="">
      </div>
    </div>
    <div class="pull-right content">
      <div class="form-group">
        <button type="button"  aria-hidden="true" id="altaInsumo" class="btn btn-success btn-md">Agregar Insumo</button>
        <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
      </div>
    </div>
    </form>
  </section><!-- /.content -->    
</aside><!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/insumoinfo.js" type="text/javascript" charset="utf-8" async defer></script>
