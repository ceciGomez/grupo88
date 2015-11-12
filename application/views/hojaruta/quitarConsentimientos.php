<aside class="right-side">
   <!-- section header -->
   <section class="content-header">
      <h1>
         Quitar Consentimiento
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="#">Hoja de Ruta</a></li>
         <li class="active">Quitar Consentimiento</li>
      </ol>
   </section>
   <!-- fin section header -->
   <!-- section body -->
   <form id="formularioHR3" role="form" method="POST" 
      action="<?php echo base_url()?>index.php/chojaderuta/quitarConsentimiento/<?php echo $idCons;echo "/";echo $idHr?>">
   <div class="content">
   <h4>Va a quitar el siguiente consentimiento:  <label>  <?php echo $idCons;?></label>
   de la hoja de ruta <label><?php echo $idHr?></label></h4>
   <h4>¿Esta seguro de continuar?</h4>
   </div>
   <div class="pull-right">
      <button class="btn btn-success btn-md" type="submit">Quitar Consentimiento</button>
                    <a class="btn btn-success btn-md" href="javascript:window.history.back();">Volver</a>
                </div>
   </form>
   <!-- fin section body -->
</aside>
<!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/hojarutainfo.js" type="text/javascript" charset="utf-8" async defer></script>
<!-- script para la fecha -->
<script type="text/javascript">
   $(function () {
       $('#datetimepicker10').datetimepicker({ locale: 'es', viewMode: 'days', format: 'DD/MM/YYYY' });
   });
</script>