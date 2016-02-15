<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>Pasteurización</h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li class="active">Ver una Pasteurización </li>
      </ol>
   </section>
   <section class="content">
    <form id="formMostrarPasteurizacion" role="form" action="">
     <div class="col-md-4">
              <?php
                  $fechaArray = explode('-', $unaPasteurizacion[0]->fechaPasteurizacion);
                  if ($fechaArray[0] == 0){
                      $fecha="";
                    }else{ 
                      $date = new DateTime();
                      $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                      $fecha= $date->format('d-m-Y'); 
                  }?>
              <label>Pasteurización número : <?php echo $unaPasteurizacion[0]->idPasteurizacion;?></label><br>
              <label>Fecha de pasteurizacion : <?php echo $fecha;?> </label>
              </div>
         <div class="row">
            <div class="col-xs-12">
               <div class="box">
                  <div class="box-body table-responsive">
                     <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                           <tr>
                              <!--<th>N°</th>-->
                              <th>FN. RN. </th>
                              <th>Nombre Donante</th>
                              <th>DNI</th>
                              <th>F.E.</th>
                              <th>Vol.</th>
                              <th>Tipo Leche</th>
                              <th>Col. Total</th>
                              <th>Col. Crema</th>
                              <th>% de Crema</th>
                              <th>% de Grasa</th>
                              <th>Kcal/l</th>
                              <th>Acidez °D</th>
                              <th>Caldo BGBL</th>
                              <th>Cult. Placa CLDE</th>
                              <th>Cult. Placa AS</th>
                              <th>Indentif</th>
                              <th>EG</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($biberones as  $value):?>
                                <?php 
                                $unFrasco = $this->frascos_model->getFrasco($value->frasco_idFrasco);
                                $consentimiento = $this->consentimiento_model->getConsentimiento($unFrasco[0]->Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento);
                                $donante = $this->donantes_model->getDonante($consentimiento[0]->Donante_nroDonante);
                                $unBebe = $this->bebeasociado_model->getDatosBebeAsociado($consentimiento[0]->nroConsentimiento);
                                  ?>
                                   <?php
                                    $fechaArray = explode('-', $unBebe->fechaNacBebeAsociado);
                                    if ($fechaArray[0] == 0){
                                        $fecha="";
                                      }else{ 
                                        $date = new DateTime();
                                        $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                        $FNRN= $date->format('d-m-Y'); 
                                    }?>
                                    <?php
                                    $fechaArray = explode('-', $unFrasco[0]->fechaExtraccion);
                                    if ($fechaArray[0] == 0){
                                        $fecha="";
                                      }else{ 
                                        $date = new DateTime();
                                        $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                        $FE= $date->format('d-m-Y'); 
                                    }?>
                           <tr>
                              <td colspan="" rowspan="" headers=""><?php echo $FNRN; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $donante[0]->nombre; echo ' '; echo $donante[0]->apellido; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $donante[0]->dniDonante;?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $FE; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->volumenDeLeche; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->tipoDeLeche; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->totalCol; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->colCrema; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->porcenCrema; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->porcenGrasa; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->kcali; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->acidezD; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->caldo; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->placaclde; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->PlacaAS; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->identif; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->eg; ?></td>
                              
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
              <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
        </div>
      </form>
   </section>
   <!-- /.content -->    
</aside>
<!-- /.right-side -->
<script src="<?php echo base_url();?>assets/internals/js/pasteurizacioninfo.js" type="text/javascript" charset="utf-8" async defer></script>
