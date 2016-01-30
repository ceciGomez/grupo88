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
    action="<?php echo base_url();?>index.php/cpmedica/altaPmedica" >
    <div class="container">
      <div class="form-group">
        <label class="col-lg-2">Bebe Receptor</label>
        <?php $bebesReceptores = $this->bebereceptor_model->getAllBebereceptor();?>
        <select class="col-lg-2" name="id_bebeReceptor" id="bebeReceptor" class="form-control">
          <?php foreach ($bebesReceptores as $value):?>
          <option value="<?php echo $value->idBebeReceptor;?>">
            <?php echo $value->idBebeReceptor, ' ',$value->nombreBebeReceptor, ' ', $value->apellidoBebeReceptor; ?>          
          </option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <label class="col-lg-2">Tipo de Leche</label>
        <select class="col-lg-2" name="tipoLecheBReceptor">
          <option value="Calostro">Calostro</option>
          <option value="Transicion">Transicion</option>
          <option value="Madura">Madura</option>
          <option value="SAO">SAO</option>
          <option value="formula">Formula</option>
        </select>
      </div>
      <div class="form-group">
        <label class="col-lg-2">Cantidad de tomas</label>
        <input class="col-lg-2" type="text" name="cantTomas" value="">
        <block>1 - 2- 3- 4- 5- etc</block>
      </div>
      <div class="form-group">
        <label class="col-lg-2">Volumen de tomas</label>
        <input class="col-lg-2" type="text" name="volTomas" value="">
        <block>20 - 50- 100 - etc</block>
      </div>
      <div class="form-group">
        <label class="col-lg-2">Kilo Calorias por litro</label>
        <input class="col-lg-2" type="text" name="kil" value="">
        <block>en porciento</block>
      </div>
      <div class="form-group">
        <label class="col-lg-2">Medico</label>
        <input class="col-lg-2" type="text" name="medico" value="">

      </div>
      <div class="form-group">
        <label class="col-lg-2">Observaciones</label>
        <textarea rows="2" cols="22" name="observaciones">
        </textarea>
        <block>Hasta 100 caracteres</block>
      </div>
    </div>
    <div class="pull-right content">
      <div class="form-group">
        <button type="button"  aria-hidden="true" id="altaPmedica" class="btn btn-success btn-md">Agregar Prescripcion Medica</button>
        
      </div>
    </div>
    </form>
  </section><!-- /.content -->    
</aside><!-- /.right-side -->
<!-- llamado al js de prescripcion medica -->
<script src="<?php echo base_url();?>assets/internals/js/pmedicainfo.js" type="text/javascript" charset="utf-8" async defer></script>


