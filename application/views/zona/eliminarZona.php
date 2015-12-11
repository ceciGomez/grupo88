<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Eliminar una Zona
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Eliminar Zona </li>
  </ol>
 </section>
  <section class="content">
    <form id="formZona" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
    action="<?php echo base_url();?>index.php/czona/eliminarZona" >
    <div class="container">
      <h4> Va a eliminar la siguiente Zona</h4>
      <h6>si esta seguro de realizar esta acción, presione el boton "Eliminar Zona"</h6>
      <input type="hidden" name="idZona" value="<?php echo $unaZona[0]->idZona; ?>">
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
    <div class="pull-right content">
      <div class="form-group">
        <button type="submit"  aria-hidden="true" id="eliminarZona" class="btn btn-success btn-md">Eliminar Zona</button>
        <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
      </div>
    </div>
    </form>
  </section><!-- /.content -->    
</aside><!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/zonainfo.js" type="text/javascript" charset="utf-8" async defer></script>


