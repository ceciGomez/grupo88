<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
  Frascos Pasteurizados
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
   <li><a>Frascos </a></li>
   <li class="active">Ver Frascos </li>
  </ol>
 </section>
  <section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                            <tr>
                              <th>Fecha de Extracción</th>
                              <th>Nro. de Frasco</th>
                              <th>Nro. de Biberón</th>
                              <th>Nro. de Pasteurización</th>
                              <th>Fecha de Pasteurización</th>
                              <th>Tipo de Leche</th>
                              <th>Estado de Frasco</th>
                              <th>Donante</th>
                             
                              <th></th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($frascos as $value) :?>
                         <?php
                              $unFrasco= $this->frascos_model->getFrasco($value->nroFrasco);
                              $fechaArray = explode('-', $unFrasco[0]->fechaExtraccion);
                              if ($fechaArray[0] == 0){
                                  $fecha="";
                                }else{ 
                                  $date = new DateTime();
                                  $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                  $fecha= $date->format('d-m-Y'); 
                              }?>
                           <?php 
                           $consentimiento = $this->consentimiento_model->getConsentimiento($unFrasco[0]->Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento);
                           $donante = $this->donantes_model->getDonante($consentimiento[0]->Donante_nroDonante);
                           $unBiberon = $this->biberon_model->getUnBiberon($value->idBiberon);
                           $unaPast = $this->pasteurizacion_model->getUnaPasteurizacion($value->idPasteurizacion);
                           $fechaArray = explode('-', $unaPast[0]->fechaPasteurizacion);
                              if ($fechaArray[0] == 0){
                                  $fecha="";
                                }else{ 
                                  $date = new DateTime();
                                  $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                  $fechaPast= $date->format('d-m-Y'); 
                                }?>
                          <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $fecha;?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $unFrasco[0]->nroFrasco;?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $unBiberon[0]->idBiberon;?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $unaPast[0]->idPasteurizacion;?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $fechaPast;?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $unFrasco[0]->tipoDeLeche;?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $unFrasco[0]->estadoDeFrasco;?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $donante[0]->nombre; echo ' '; echo $donante[0]->apellido;?></td>
                           <td colspan="" rowspan="" headers="">
                              
                              <a title="Ver Frasco" href="<?php echo base_url();?>index.php/cfrascos/view/verUnFrasco/<?php echo $value->nroFrasco;?>"
                                class="btn btn-default btn-sm" role="button">
                                <i class="fa fa-eye"></i></a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                       </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

  </section>
  

</aside><!-- /.right-side -->

