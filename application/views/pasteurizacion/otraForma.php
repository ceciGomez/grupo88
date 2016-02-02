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
         <div class="row">
    <form id="mostrarFrascos" role="form" method="POST">
            <div class="col-xs-6">
               <div class="box">
                  <div class="box-body table-responsive">
                     <table id="example" class="table table-responsive table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Orden Frasco</th>
                              <th>Fecha Extracción</th>
                              <th>Vol Frasco</th>
                              <th>Tipo Leche</th>
                              <th>Nro Frasco</th>
                              <th>Donante</th>
                              
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
                              <td colspan="" rowspan="" headers=""><?php echo $unFrasco[0]->nroFrasco; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $donante[0]->nombre; echo ' '; echo $donante[0]->apellido; ?></td>
                                                            
                            </tr>
                           <?php endforeach ?>
                        </tbody>
                     </table>
                  </div>
                  <!--fin de tabla -->
               </div>
               <!-- -->
            </div>
      </form>
      <form id="formCrearBiberon" role="form" method="POST" action="<?php echo base_url()?>index.php/cpasteurizacion/crearBiberon">
                   <div class="col-xs-6">
               <div class="box">
                  <div class="box-body table-responsive">
                     <table id="example" class="table table-responsive table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Orden de Biberon</th>
                              <th>Orden Frasco/Nro Frasco</th>
                              <th>Volumen Div.</th>
                                                           
                           </tr>
                        </thead>
                        <tbody>
                          
                            <?php for ($orden=1; $orden < 36 ; $orden++) { ?>
                                                       
                             <?php 
                                 $consentimiento = $this->consentimiento_model->getConsentimiento($unFrasco[0]->Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento);
                                 $donante = $this->donantes_model->getDonante($consentimiento[0]->Donante_nroDonante);
                                  ?>
                           <tr>
                              <td colspan="" rowspan="" headers=""><?php echo $orden; ?></td>
                              <td colspan="" rowspan="" headers="">
                                  <select  name="frascoSelec[]" id="frasco" value="$valor" class="form-control">
                                              <option value="0" >
                                                <?php echo 'Sin Asignar';?>          
                                              </option>
                                           <?php foreach ($elemSelec as  $value):?>
                                           <?php $unFrasco = $this->frascos_model->getFrasco("$value");?>
                                              <option value="<?php echo $unFrasco[0]->nroFrasco;?>" >
                                                <?php echo 'Frasco'.' '.$orden,'('.$unFrasco[0]->nroFrasco.')';?>          
                                              </option>
                                   <?php endforeach ?>
                                              
                              </select>
                              </td>     
                              <td colspan="" rowspan="" headers=""><input name="volBib[]" id="volBiberon"></td>                   
                                </tr>
                              <?php } ?>
                            </tbody>
                         </table>
                      </div>
                      <!--fin de tabla -->
                   </div>
                   <!-- -->
                 </div>
                    <div class="form-group pull-right content">
                          <button type="button"  aria-hidden="true" 
                            id="botonCrearBiberon" class="btn btn-success btn-md">Confirmar Selección</button>
                            <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
                    </div>
 
               </form>
             </div>
          

   </section>
   <!-- /.content -->    
</aside>
<!-- /.right-side -->
<script src="<?php echo base_url();?>assets/internals/js/pasteurizacioninfo.js" type="text/javascript" charset="utf-8" async defer></script>
