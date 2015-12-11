<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Ver una Zona
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Ver Zona </li>
  </ol>
 </section>
  <section class="content">
    <form id="formZona" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
    action="<?php echo base_url();?>index.php/czona/altaZona" >
    <div class="container">
      <div class="form-group">
        <label class="col-lg-2">Nombre de Zona</label>
        <input class="col-lg-2" type="text" name="nombreZona" 
        value="<?php echo $unaZona[0]->nombreZona; ?>" disabled="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Localidad</label>
        <?php $unaLocalidad = $this->localidad_model->getUnaLocalidad($unaZona[0]->Localidad_idLocalidad) ?>
        <input class="col-lg-2" type="text" name="nombreLocalidad" 
        value="<?php echo $unaLocalidad[0]->nombreLocalidad; ?>"disabled="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Dia de Visita</label>
        <input class="col-lg-2" type="text" name="diaVisita" 
        value="<?php  echo $unaZona[0]->dia_visita;?>" disabled="">
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


