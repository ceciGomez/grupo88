<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Ver Prescripciones Médicas
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
   <li class="active">Ver Prescripciones Médicas </li>
  </ol>
 </section>
  <section class="content">
  <form id="formAgregarPmedicasVTPM" role="form" method="POST" 
      action="<?php echo base_url()?>index.php/cpmedica/view/altaPmedica">
    <div class="pull-left content">
      <button type="submit"  aria-hidden="true" id="altaPmedicaVistaVerTPM" class="btn btn-success btn-md">Nueva Prescripcion Medica</button>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                            <tr>
                              <th>Nro de Prescripcion M.</th>
                              <th>Fecha de Prescripcion M.</th>
                              <th>Bebe Receptor</th>
                              <th>Tipo de Leche</th>
                              <th>Medico</th>
                              <th>Estado</th>
                              <th></th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($pmedicas as $value) :?>
                         <?php
                              $fechaArray = explode('-', $value->fechaPrescripcion);
                              if ($fechaArray[0]==0 && $fechaArray[1]==0){
                                  $fecha="";
                                }else{
                                  $date = new DateTime();
                                  $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                  $fecha= $date->format('d-m-Y'); 
                                  $unBebe = $this->bebereceptor_model->getBebereceptor($value->BebeReceptor_idBebeReceptor);
                                  $apellidobr =  $unBebe[0]->apellidoBebeReceptor;
                                  $nombrebr = $unBebe[0]->nombreBebeReceptor;
                                }?>
                          <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $value->idPrescripcionMedica?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $fecha?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $apellidobr,' ',$nombrebr ; ?></td><!--BEBE RECEP  -->
                            <td colspan="" rowspan="" headers=""><?php echo $value->tipoDeLecheBanco?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->medico?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->estadoPresMedica?></td>
                            

                            <td colspan="" rowspan="" headers="">
                              <a href="<?php echo base_url()?>index.php/cpmedica/view/verUnaPmedica/<?php echo $value->idPrescripcionMedica?>"
                                class="btn btn-default btn-sm" role="button" title="ver una prescripcion medica">
                                <i class="fa fa-eye"></i></a>
                                 <a href="<?php echo base_url()?>index.php/cpmedica/view/editarPmedica/<?php echo $value->idPrescripcionMedica?>"
                                  class="btn btn-default btn-sm" role="button" title="editar una prescripcion medica">
                                <i class="fa fa-pencil"></i></a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                       </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
  </form>

  </section><!-- /.content -->    
  
</aside><!-- /.right-side -->
<script src="<?php echo base_url();?>assets/internals/js/fraccionamientoinfo.js" type="text/javascript" charset="utf-8" async defer></script>


