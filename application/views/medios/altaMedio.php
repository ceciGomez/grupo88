<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Agregar un nuevo Medio
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Alta Medio </li>
  </ol>
 </section>
  <section class="content">
    <form id="formMedio" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
    action="<?php echo base_url();?>index.php/cmedios/altaMedio" >
    <div class="container">
      <div class="form-group">
        <label class="col-lg-2">Nombre del Medio</label>
        <input class="col-lg-2" type="text" name="nombreMedio" value=""required>
      </div>
      <div class="form-group">
        <label class="col-lg-2">Descripcion del Medio</label>
        <input class="col-lg-2" type="text" name="descripcionMedio" value="">
      </div>
    </div>
    <div class="pull-right content">
      <div class="form-group">
        <button type="button"  aria-hidden="true" id="altaMedio" class="btn btn-success btn-md">Agregar Medio</button>
        <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
      </div>
    </div>
    </form>
  </section><!-- /.content -->    
</aside><!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/mediosinfo.js" type="text/javascript" charset="utf-8" async defer></script>
