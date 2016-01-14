<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Registrar Consumo
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Registrar Consumo</li>
  </ol>
 </section>
  <section class="content">
    <form id="formInsumoEditar" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
    action="<?php echo base_url();?>index.php/cinsumos/registrarConsumo" >
    <div class="container">
      <div style="display:none">
        <input name="idInsumo" value="<?php echo $unInsumo[0]->idInsumo;?>">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Nombre del insumo</label>
        <input class="col-lg-2" type="text" name="nombreInsumo" 
        value="<?php echo $unInsumo[0]->insumo; ?>" disabled>
      </div>
      <?php if ($unInsumo[0]->unidad == 0) {
        ?>
          <div class="form-group">
          <label class="col-lg-2">Unidades consumidas</label>
          <input class="col-lg-2" type="text" name="unidad" 
          value="<?php echo $unInsumo[0]->unidad; ?>" disabled>
        </div>
      <?php
      } else { ?>
        <div class="form-group">
          <label class="col-lg-2">Unidades consumidas</label>
          <input class="col-lg-2" type="text" name="unidad" 
          value="<?php echo $unInsumo[0]->unidad; ?>">
        </div>
      <?php } ?>

      <?php if ($unInsumo[0]->gramos == 0) {
        ?>
        <div class="form-group">
          <label class="col-lg-2">Gramos consumidos</label>
          <input class="col-lg-2" type="text" name="gramos" 
          value="<?php echo $unInsumo[0]->gramos; ?>" disabled>
        </div>
      <?php } else { ?>
          <div class="form-group">
            <label class="col-lg-2">Gramos consumidos</label>
            <input class="col-lg-2" type="text" name="gramos" 
            value="<?php echo $unInsumo[0]->gramos; ?>" >
          </div>
      <?php } ?>
      <div class="form-group">
        <label class="col-lg-2">Stock de reposicion</label>
        <input class="col-lg-2" type="text" name="stockReposicion" 
        value="<?php echo $unInsumo[0]->stockReposicion; ?>" disabled>
      </div>
      <div class="form-group">
        <label class="col-lg-2">Stock critico</label>
        <input class="col-lg-2" type="text" name="stockCritico" 
        value="<?php echo $unInsumo[0]->stockCritico; ?>" disabled>
      </div>
      <div class="form-group">
        <label class="col-lg-2">Descripcion del insumo</label>
        <input class="col-lg-2" type="text" name="descripcionInsumo" 
        value="<?php echo $unInsumo[0]->descripcionInsumo; ?>" disabled>
      </div>
    </div>
  <div class="pull-right">
    <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
    
    <button class="btn btn-success" type="submit">Registrar Consumo</button>
  </div>
    </form>
  </section><!-- /.content -->

</aside><!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/insumoinfo.js" type="text/javascript" charset="utf-8" async defer></script>