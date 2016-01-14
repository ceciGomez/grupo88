<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Ver un Insumo
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Ver Insumo </li>
  </ol>
 </section>
  <section class="content">
    <form id="formMedios" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
    action="<?php echo base_url();?>index.php/cinsumos/altaInsumo" >
    <div class="container">
      <div class="form-group">
        <label class="col-lg-2">Nombre del insumo</label>
        <input class="col-lg-2" type="text" name="nombreInsumo" 
        value="<?php echo $unInsumo[0]->insumo; ?>" disabled="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Unidades</label>
        <input class="col-lg-2" type="text" name="nombreMedio" 
        value="<?php echo $unInsumo[0]->unidad; ?>" disabled="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Gramos</label>
        <input class="col-lg-2" type="text" name="nombreMedio" 
        value="<?php echo $unInsumo[0]->gramos; ?>" disabled="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Stock de reposicion</label>
        <input class="col-lg-2" type="text" name="nombreMedio" 
        value="<?php echo $unInsumo[0]->stockReposicion; ?>" disabled="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Stock critico</label>
        <input class="col-lg-2" type="text" name="nombreMedio" 
        value="<?php echo $unInsumo[0]->stockCritico; ?>" disabled="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Descripcion del insumo</label>
        <input class="col-lg-2" type="text" name="descripcionMedio" 
        value="<?php echo $unInsumo[0]->descripcionInsumo; ?>"disabled="">
      </div>
    </div>
    </form>
  <div class="pull-right">
    <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
  </div>
  </section><!-- /.content -->
</aside><!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/insumoinfo.js" type="text/javascript" charset="utf-8" async defer></script>
