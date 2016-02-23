<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>   Ver Prescripciones Medicas </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li class="active">Ver Prescripcion Medica </li>
      </ol>
   </section>
   <section class="content">
     
      <form id="formAgregarPmedicas" role="form" method="POST" 
      action="<?php echo base_url()?>index.php/cfraccionamiento/mostrarPmedicas">
         <div class="row">
            <div class="col-xs-12">
               <div class="box">
                <label>Tipo de leche:</label>
                <input id="tipoLeche" name="tipoLeche" value="<?php echo $tipoLeche; ?>">
                  <div class="box-body table-responsive">
                     <table id="example2" class="table table-responsive table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Fecha P. Medica</th>
                              <th>Cantidad de Tomas</th>
                              <th>Volumen por toma</th>
                              <th>Volumen total</th>
                              <th>KCal</th>
                              <th>Medico</th>
                              <th></th><th></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($pmedicasPorTipo as  $value):?>
                           <tr>
                              <?php  
                                 $volTotal = $value->cant_tomas*$value->volumen; 
                                 $fechaArreglada = $this->pasteurizacion_model->arreglarFecha($value->fechaPrescripcion);?>
                              <td colspan="" rowspan="" headers=""><?php echo $fechaArreglada; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->cant_tomas; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->volumen; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $volTotal ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->kcal; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->medico; ?></td>
                              <td colspan="" rowspan="" headers="">
                                 <a href="<?php echo base_url()?>index.php/cpmedica/view/verUnaPmedica/<?php echo $value->idPrescripcionMedica?>"
                                    class="btn btn-default btn-sm"
                                    title="ver prescripcion medica" role="button">
                                 <i class="fa fa-eye"></i>
                                 </a>
                              </td>
                              <td colspan="" rowspan="" headers="">
                                       <input  id="checkbox" type="checkbox" value="<?php echo $value->idPrescripcionMedica; ?>" name="consSel[]">
                              </td>
                            </tr>
                           <?php endforeach ?>
                        </tbody>
                     </table>
                  </div>
                  <!--fin de tabla -->
               </div>
               <!-- -->
         <div class="form-group pull-right content">
                  <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
                  <button type="button"  aria-hidden="true" 
                     id="agregarPmedicas" class="btn btn-success btn-md">Agregar Seleccionados</button>
               </div>
         </div>
            </div>
      </form>
   </section>
   <!-- /.content -->    
</aside>
<!-- /.right-side -->
<script src="<?php echo base_url();?>assets/internals/js/fraccionamientoinfo.js" type="text/javascript" charset="utf-8" async defer></script>
