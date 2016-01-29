<!--Realizar el Fraccionamiento -->
<aside class="right-side">
   <section class="content-header col-md-12">
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="#">Fraccionamiento</a></li>
         <li class="active">Fraccionamientos Realizados </li>
      </ol>
      <h1>Fraccionamientos</h1>
   </section>
   <!-- fin section header -->
   <section class="content col-md-12">
      <form id="formfraccionarBiberon" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
      action="<?php echo base_url();?>index.php/">
         
         <div class="row">
            <div class="col-xs-12">
               <div class="box">
                <label>Tipo de leche:</label>
                <input id="tipoLeche" name="tipoLeche" value="<?php echo '';//$tipoLeche; ?>">
                  <div class="box-body table-responsive">
                     <table id="example2" class="table table-responsive table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Id de Fraccionamiento</th>
                              <th>Fecha de Fraccionamiento</th>
                              <th>Volumen</th>
                              <th>Id P Medica</th>
                              <th>Fecha P Medica</th>
                              <th>Bebe Receptor</th>
                              <th>Biberon</th>
                              <th>Volumen Biberon</th>
                              <th>Volumen Desperdiciado</th>
                              <th></th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($idFracc as  $value):
                           $id = $value['idFracc'];
                           $unFracc = $this->fraccionamiento_model->getUnFraccionamiento($id);
                           //var_dump($unFracc);
                           $unBebe = $this->bebereceptor_model->getBebereceptor($unFracc[0]->BebeReceptor_idBebeReceptor);
                           $unBiberon = $this->biberon_model->getUnBiberon($unFracc[0]->Biberon_idBiberon);
                           //var_dump($unBiberon);
                           ?>

                           <tr>
                              <?php  
                                 $fechaArreglada = $this->pasteurizacion_model->arreglarFecha($unFracc[0]->fechaFraccionamiento);
                                 $fechaArreglada2 = $this->pasteurizacion_model->arreglarFecha($unFracc[0]->PrescripcionMedica_fechaPrescripcion);?>
                              <td colspan="" rowspan="" headers=""><?php echo $id; ?></td> <!--id frac  -->
                              <td colspan="" rowspan="" headers=""><?php echo $fechaArreglada; ?></td><!-- fecha frac -->
                              <td colspan="" rowspan="" headers=""><?php echo $unFracc[0]->volumen ?></td><!-- volumen  -->
                              <td colspan="" rowspan="" headers=""><?php echo $unFracc[0]->PrescripcionMedica_idPrescripcionMedica; ?></td><!-- id pm -->
                              <td colspan="" rowspan="" headers=""><?php echo $fechaArreglada2; ?></td><!--  fecha pm -->
                              <td colspan="" rowspan="" headers=""><?php echo $unBebe[0]->apellidoBebeReceptor,' ',$unBebe[0]->nombreBebeReceptor ; ?></td><!--BEBE RECEP  -->
                              <td colspan="" rowspan="" headers=""><?php echo $unBiberon[0]->idBiberon; ?></td><!--  -->
                              <td colspan="" rowspan="" headers=""><?php echo $unBiberon[0]->volumenDeLeche; ?></td><!--  -->
                              <td colspan="" rowspan="" headers=""><?php echo $unBiberon[0]->volumenDeLeche - $unBiberon[0]->volFraccionado; ?></td><!--  -->
                              <td colspan="" rowspan="" headers="">
                                 <a href="<?php echo base_url()?>index.php/cpmedica/view/verUnaPmedica/<?php echo '';//$value->idPrescripcionMedica?>"
                                    class="btn btn-default btn-sm"
                                    title="ver prescripcion medica" role="button">
                                 <i class="fa fa-eye"></i>
                                 </a>
                              </td>
                            </tr>
                           <?php endforeach ?>
                        </tbody>
                     </table>
                  </div>
                  <!--fin de tabla -->
               </div>
               <!-- -->
            </div>
         </div>
         <div class="form-group pull-right content">
                  <button type="button"  aria-hidden="true" 
                     id="agregarPmedicas" class="btn btn-success btn-md">Agregar Seleccionados</button>
                     <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
               </div>

      </form>
   </section>
</aside>
<script src="<?php echo base_url();?>assets/internals/js/fraccionamientoinfo.js" type="text/javascript" charset="utf-8" async defer></script>


