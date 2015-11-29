<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Ver Frascos por Donante
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li class="active">Ver frascos por donante </li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-body table-responsive">
                  <table id="example1" class="table table-resonsive table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>id Frasco</th>
                           <th>Fecha de Recorrido</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach ($frascos as  $value):?>
                        <tr>
                           <td colspan="" rowspan="" headers=""><?php echo $value->idFrasco; ?></td>
                           <td colspan="" rowspan="" headers=""></td>
                           <td colspan="" rowspan="" headers="">
                              <a href="<?php echo base_url()?>index.php/cfrascos/view/verUnFrasco/<?php echo $value->idFrasco?>"
                                 class="btn btn-default btn-sm"
                                 title="Ver un frasco" role="button">
                              <i class="fa fa-eye"></i></a>
                              <a href="<?php echo base_url()?>index.php/cfrascos/view/registrarResultados/<?php echo $value->idFrasco?>"
                                 class="btn btn-default btn-sm" role="button" title="Registrar Resultados">
                              <i class="fa fa-pencil"></i></a>
                           </td>
                        </tr>
                        <?php endforeach ?>
                     </tbody>
                  </table>
               </div>
               <!--fin de tabla -->
            </div>
            <!--boton para agregar una nueva zona -->
            <div class="pull-right"> 
               <a href="<?php echo base_url();?>index.php/czona/view/altaZona"
                  class="btn btn-success btn-md" role="button">Agregar Zona</a>
            </div>
         </div>
      </div>
   </section>
   <!-- /.content -->    
</aside>
<!-- /.right-side -->