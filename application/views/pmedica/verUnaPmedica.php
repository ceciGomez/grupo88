<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Ver una Prescripcion Medica
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Ver una Prescripcion Medica</li>
  </ol>
 </section>
  <section class="content">
    <?php $idPM = $unaPmedica[0]->idPrescripcionMedica; ?>
    <form id="formPmedica" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
    action="<?php echo base_url();?>index.php/cpmedica/view/editarPmedica/<?php echo $idPM; ?>" >
    <div class="container">
      <div class="form-group">
        <label class="col-lg-2"disabled="">Bebe Receptor</label>
        <?php $unBebe = $this->bebereceptor_model->getBebereceptor($unaPmedica[0]->BebeReceptor_idBebeReceptor);?>
       <input value="<?php echo $unBebe[0]->nombreBebeReceptor, ' ', $unBebe[0]->apellidoBebeReceptor; ?>" disabled="">
       
      </div>
      <div class="form-group">
        <label class="col-lg-2">Tipo de Leche</label>
        <input value="<?php echo $unaPmedica[0]->tipoDeLecheBanco;?>" disabled="">
        
      </div>
      <div class="form-group">
        <label class="col-lg-2">Cantidad de tomas</label>
        <input class="col-lg-2" type="text" name="cantTomas" value="<?php echo $unaPmedica[0]->cant_tomas; ?>"
        disabled="">
        
      </div>
      <div class="form-group">
        <label class="col-lg-2">Volumen de tomas</label>
        <input class="col-lg-2" type="text" name="volTomas" value="<?php echo $unaPmedica[0]->volumen ?>"
        disabled="">
        
      </div>
      <div class="form-group">
        <label class="col-lg-2">Kilo Calorias por litro</label>
        <input class="col-lg-2" type="text" name="kil" value="<?php echo $unaPmedica[0]->kcal ?>"
        disabled="">
        
      </div>
      <div class="form-group">
        <label class="col-lg-2">Medico</label>
        <input class="col-lg-2" type="text" name="medico" value="<?php echo $unaPmedica[0]->medico ?>"
        disabled="">

      </div>
      <div class="form-group">
        <label class="col-lg-2">Estado Prescripcion Medica</label>
        <input class="col-lg-2" type="text" name="estadopm" value="<?php echo $unaPmedica[0]->estadoPresMedica ?>"
        disabled="">

      </div>
      <div class="form-group">
        <label class="col-lg-2">Observaciones</label>
        <textarea rows="2" cols="22" name="observaciones" value="<?php echo $unaPmedica[0]->observaciones?>" disabled="">
        <?php echo $unaPmedica[0]->observaciones?>
        </textarea>
        
      </div>
    </div>
    <div class="pull-right content">
      <div class="form-group">
         <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
        <button type="button"  aria-hidden="true" id="altaPmedica" class="btn btn-success btn-md">Editar Prescripcion Medica</button>
        
      </div>
    </div>
    </form>
  </section><!-- /.content -->    
</aside><!-- /.right-side -->
<!-- llamado al js de prescripcion medica -->
<script src="<?php echo base_url();?>assets/internals/js/pmedicainfo.js" type="text/javascript" charset="utf-8" async defer></script>


