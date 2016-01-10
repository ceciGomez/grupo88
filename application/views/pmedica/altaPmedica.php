<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Agregar una nueva Prescripcion Medica
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Alta Prescripcion Medica </li>
  </ol>
 </section>
  <section class="content">
    <form id="formPmedica" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
    action="<?php echo base_url();?>index.php/czona/altaPmedica" >
    <div class="container">
      <div class="form-group">
        <label class="col-lg-2">Bebe Receptor</label>
        <?php $bebesReceptores = $this->bebereceptor_model->getAllBebereceptor();?>
        <select class="col-lg-2" name="bebeReceptor" id="localidad" value="$valor" class="form-control">
          <?php foreach ($bebesReceptores as $value):?>
          <option value="<?php echo '$value->BebeReceptor_idBebeReceptor';?>">
            <?php echo $value->nombreBebeReceptor, ' ', $value->apellidoBebeReceptor; ?>          
          </option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <label class="col-lg-2">Tipo de Leche</label>
        <select class="col-lg-2" name="tipoLecheBReceptor">
        </select>
      </div>
    </div>
    <div class="pull-right content">
      <div class="form-group">
        <button type="button"  aria-hidden="true" id="altaZona" class="btn btn-success btn-md">Agregar Prescripcion Medica</button>
        
      </div>
    </div>
    </form>
  </section><!-- /.content -->    
</aside><!-- /.right-side -->
<!-- llamado al js de prescripcion medica -->
<script src="<?php echo base_url();?>assets/internals/js/pmedicainfo.js" type="text/javascript" charset="utf-8" async defer></script>


