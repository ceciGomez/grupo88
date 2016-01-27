<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>Frascos a Pasteurizar</h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li class="active">Nueva Pasteurización </li>
      </ol>
   </section>
   <section class="content">
    <form id="mostrarFrascos" role="form" method="POST" action="<?php echo base_url()?>index.php/cpasteurizacion/confirmaFrascos">
         <div class="row">
            <div class="col-xs-12">
               <div class="box">
                  <div class="box-body table-responsive">
                     <table id="example2" class="table table-responsive table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Número de Orden</th>
                              <th>Fecha Extracción</th>
                              <th>Volumen Frasco</th>
                              <th>Tipo de Leche</th>
                              <th>Estado Frasco</th>
                              <th>Nro Frasco</th>
                              <th>Donante</th>
                              <th></th>
                           </tr>
                        </thead>
                        <tbody>
                          <?php $orden = 0; ?>
                           <?php foreach ($elemSelec as  $value):?>
                                 
                                   <?php
                                   $orden = $orden + 1;
                                   $unFrasco = $this->frascos_model->getFrasco("$value");
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
                                  ?>
                           <tr>
                              <td colspan="" rowspan="" headers=""><?php echo $orden; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $fecha; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $unFrasco[0]->volumenDeLeche; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $unFrasco[0]->tipoDeLeche; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $unFrasco[0]->estadoDeFrasco; ?></td>
                              <td colspan="" rowspan="" headers=""><input type="hidden" name="frasSel[]" value="<?php echo $unFrasco[0]->nroFrasco; ?>"><?php echo $unFrasco[0]->nroFrasco; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $donante[0]->nombre; echo ' '; echo $donante[0]->apellido; ?></td>
                              <td colspan="" rowspan="" headers="">
                                <a href="<?php echo base_url()?>index.php/cfrascos/view/verUnFrasco/<?php echo $unFrasco[0]->nroFrasco?>"
                                    class="btn btn-default btn-sm"
                                    title="Ver un Frasco" role="button">
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
                     id="botonConfirmaFrascos" class="btn btn-success btn-md">Confirmar Selección</button>
                     <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
               </div>
      </form>
   </section>
   <!-- /.content -->    
</aside>
<!-- /.right-side -->
<script src="<?php echo base_url();?>assets/internals/js/pasteurizacioninfo.js" type="text/javascript" charset="utf-8" async defer></script>
