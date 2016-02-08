<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>Pasteurización</h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li class="active">Presentación de Pasteurización </li>
      </ol>
   </section>
   <section class="content">
    <form id="formMostrarPasteurizacion" role="form" method="POST" action="">
     <?php $unArreglo = unserialize(base64_decode($_POST["$data"])); ?> 
         <input type="hidden" name="idPasteurizacion" id="idPasteurizacion" value="<?php echo $unId ?>">
          <div class="col-md-4">
              <?php
                  $fechaArray = explode('-', $unaPasteurizacion->fecha);
                  if ($fechaArray[0] == 0){
                      $fecha="";
                    }else{ 
                      $date = new DateTime();
                      $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                      $fecha= $date->format('d-m-Y'); 
                  }?>
              <label>Pasteurización número : <?php echo $unId ?> </label>
              <label>fecha de pasteurizacion </label>
              </div>
         <div class="row">
            <div class="col-xs-12">
               <div class="box">
                  <div class="box-body table-responsive">
                     <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>N°</th>
                              <th>FN.RN.</th>
                              <th>Nombre Donante</th>
                              <th>D.N.I.</th>
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
                           <?php foreach ($frascos as  $value):?>
                                   <?php
                                    $fechaArray = explode('-', $value->fechaExtraccion);
                                    if ($fechaArray[0] == 0){
                                        $fecha="";
                                      }else{ 
                                        $date = new DateTime();
                                        $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                        $fecha= $date->format('d-m-Y'); 
                                    }?>
                                 <?php 
                                 $consentimiento = $this->consentimiento_model->getConsentimiento($value->Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento);
                                 $donante = $this->donantes_model->getDonante($consentimiento[0]->Donante_nroDonante);
                                  ?>
                           <tr>
                              <td colspan="" rowspan="" headers=""><?php echo $fecha; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->volumenDeLeche; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->tipoDeLeche; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->estadoDeFrasco; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->nroFrasco; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $donante[0]->nombre; echo ' '; echo $donante[0]->apellido; ?></td>
                              <td colspan="" rowspan="" headers="">
                                  
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
                     id="verFrascos" class="btn btn-success btn-md">Ver Seleccionados</button>
                     <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
        </div>
      </form>
   </section>
   <!-- /.content -->    
</aside>
<!-- /.right-side -->
<script src="<?php echo base_url();?>assets/internals/js/pasteurizacioninfo.js" type="text/javascript" charset="utf-8" async defer></script>
