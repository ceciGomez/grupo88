<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>Pasteurización</h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li class="active">Nueva Pasteurización </li>
      </ol>
   </section>
   <section class="content">
    <form id="agregarFrascos" role="form" method="POST" action="<?php echo base_url()?>index.php/cpasteurizacion/agregarFrascos">
         <div class="row">
            <div class="col-xs-12">
               <div class="box">
                  <div class="box-body table-responsive">
                     <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>Fecha Extracción</th>
                              <th>Volumen Frasco</th>
                              <th>Tipo de Leche</th>
                              <th>Estado Frasco</th>
                              <th>Nro Frasco</th>
                              <th>Donante</th>
                              <th></th><th>Seleccionar</th>
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
                                <a href="<?php echo base_url()?>index.php/cfrascos/view/verUnFrasco/<?php echo $value->nroFrasco?>"
                                    class="btn btn-default btn-sm"
                                    title="Ver un Frasco" role="button">
                                 <i class="fa fa-eye"></i>
                                 </a>
                              </td>
                              <td colspan="" rowspan="" headers="">
                                       <input  id="checkbox" type="checkbox" value="<?php echo $value->nroFrasco; ?>" name="consSel[]">
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