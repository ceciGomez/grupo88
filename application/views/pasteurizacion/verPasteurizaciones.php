<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>Pasteurización</h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li class="active">Ver todas las Pasteurizaciones </li>
      </ol>
   </section>
   <section class="content">
    <form id="formMostrarPasteurizacion" role="form" action="">
         <div class="row">
            <div class="col-xs-12">
               <div class="box">
                  <div class="box-body table-responsive">
                     <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>N° de Pasteurizacion</th>
                              <th>Fecha de Pasteurizacion</th>
                              <th>Responsable</th>
                              <th>Confirmación</th>
                              <th></th>
                              
                           </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($pasteurizaciones as  $value):?>
                              <?php
                              $fechaArray = explode('-', $value->fechaPasteurizacion);
                              if ($fechaArray[0] == 0){
                                  $fecha="";
                                }else{ 
                                  $date = new DateTime();
                                  $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                  $fechaPast= $date->format('d-m-Y'); 
                              }?>
                                  
                           <tr>
                              <td colspan="" rowspan="" headers=""><?php echo $value->idPasteurizacion; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $fechaPast; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->responsable; ?></td>
                              <td colspan="" rowspan="" headers=""><?php echo $value->confirmacion; ?></td>
                              <td colspan="" rowspan="" headers="">
                                  <a title="Ver una Pasteurizacion" href="<?php echo base_url();?>index.php/cpasteurizacion/view/verUnaPasteurizacion/<?php echo $value->idPasteurizacion;?>"
                                class="btn btn-default btn-sm" role="button">
                                <i class="fa fa-eye"></i></a>
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
              <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
        </div>
      </form>
   </section>
   <!-- /.content -->    
</aside>
<!-- /.right-side -->
<script src="<?php echo base_url();?>assets/internals/js/pasteurizacioninfo.js" type="text/javascript" charset="utf-8" async defer></script>
