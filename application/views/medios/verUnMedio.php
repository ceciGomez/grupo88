<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Ver un Medio
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Ver Medios </li>
  </ol>
 </section>
  <section class="content">
    <form id="formMedios" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
    action="<?php echo base_url();?>index.php/cmedios/altaMedio" >
    <div class="container">
      <div class="form-group">
        <label class="col-lg-2">Nombre del medio</label>
        <input class="col-lg-2" type="text" name="nombreMedio" 
        value="<?php echo $unMedio[0]->Medio; ?>" disabled="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Descripcion</label>
        <input class="col-lg-2" type="text" name="descripcionMedio" 
        value="<?php echo $unMedio[0]->DescripcionMedio; ?>"disabled="">
      </div>
    </div>
    </form>
  <div class="pull-right">
    <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
  </div>
  </section><!-- /.content -->
</aside><!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/zonainfo.js" type="text/javascript" charset="utf-8" async defer></script>

