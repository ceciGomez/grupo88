<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Editar una prescripcion medica
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li class="active">Editar una prescripcion medica</li>
      </ol>
   </section>
   <section class="content">
      <?php $idPM = $unaPmedica[0]->idPrescripcionMedica; ?>
      <form id="formEditarPmedica" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
         action="<?php echo base_url();?>index.php/cpmedica/editarPmedica/<?php echo $idPM?>" >
         <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               <div class="panel-body">
                  <div class="form-group">
                     <label class="col-lg-3">Bebe Receptor</label>
                     <?php $bebesReceptores = $this->bebereceptor_model->getAllBebereceptor();?>
                     <select class="col-lg-3" name="id_bebeReceptor" id="bebeReceptor" class="form-control" disabled="">
                        <?php foreach ($bebesReceptores as $value):?>
                        <option value="<?php echo $value->idBebeReceptor;?>">
                           <?php echo $value->nombreBebeReceptor, ' ', $value->apellidoBebeReceptor; ?> 
                        </option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-3">Tipo de Leche</label>
                     <select class="col-lg-3" name="tipoLecheBReceptor">
                        <option value="unaPmedica[0]->tipoDeLecheBanco"><?php echo $unaPmedica[0]->tipoDeLecheBanco ?></option>
                        <option value="Calostro">Calostro</option>
                        <option value="Transicion">Transicion</option>
                        <option value="Madura">Madura</option>
                        <option value="SAO">SAO</option>
                        <option value="formula">Formula</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-3">Cantidad de tomas</label>
                     <input class="col-lg-3" type="text" name="cantTomas" value="<?php echo $unaPmedica[0]->cant_tomas; ?>">
                     <block>1 - 2- 3- 4- 5- etc</block>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-3">Volumen de tomas</label>
                     <input class="col-lg-3" type="text" name="volTomas" value="<?php echo $unaPmedica[0]->volumen ?>">
                     <block>20 - 50- 100 - etc</block>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-3">Kilo Calorias por litro</label>
                     <input class="col-lg-3" type="text" name="kil" value="<?php echo $unaPmedica[0]->kcal ?>">
                     <block>en porciento</block>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-3">Medico</label>
                     <input class="col-lg-3" type="text" name="medico" value="<?php echo $unaPmedica[0]->medico ?>">
                  </div>
                  <div class="form-group">
                     <label class="col-lg-3">Estado Prescripcion Medica</label>
                     <input class="col-lg-3" type="text" name="estadopm" value="<?php echo $unaPmedica[0]->estadoPresMedica ?>">
                  </div>
                  <div class="form-group">
                     <label class="col-lg-3">Observaciones</label>
                     <textarea rows="2" cols="22" name="observaciones" value="<?php echo $unaPmedica[0]->observaciones?>">
        </textarea>
                     <block>Hasta 100 caracteres</block>
                  </div>
                  <div class="pull-right">
                     <div class="form-group">
                        <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
                        <button type="button"  aria-hidden="true" id="editarPmedica" class="btn btn-success btn-md">Confirmar Cambios</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </section>
   <!-- /.content -->    
</aside>
<!-- /.right-side -->
<!-- llamado al js de prescripcion medica -->
<script src="<?php echo base_url();?>assets/internals/js/pmedicainfo.js" type="text/javascript" charset="utf-8" async defer></script>