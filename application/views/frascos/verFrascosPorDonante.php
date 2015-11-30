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
   <?php if ($frascos){ ?>
   <section class="content">
      <div >
         <div  class="form-group">
           <label class="col-lg-3">Nombre y Apellido Donante</label>
           <input class="col-lg-2" type="text" name="nyapDonante" 
           value="<?php echo $unaDonante[0]->nombre;
                        echo ' ';
                        echo $unaDonante[0]->apellido; ?>" disabled="">
         </div>
         <div class="form-group">
           <label class="col-lg-1">DNI</label>
           <input class="col-lg-2" type="text" name="dniDonante" 
           value="<?php echo $unaDonante[0]->dniDonante ?>" disabled="">
         </div>
      </div>
      <div class="row">
         <div class="col-xs-12">
            <div class="box">
               <div class="box-body table-responsive">
                  <table id="example1" class="table table-resonsive table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>id Frasco</th>
                           <th>id Hoja de Ruta</th>
                           <th>Fecha de Recorrido</th>
                           <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php foreach ($frascos as  $value):?>
                        <?php
                                       $fechaArray = explode('-', $unaHr[0]->fechaRecorrido);
                                       if ($fechaArray[0] == 0){
                                           $fecha="";
                                         }else{ 
                                           $date = new DateTime();
                                           $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                           $fecha= $date->format('d-m-Y'); 
                                       }?>
                                 
                        <tr>
                           <td colspan="" rowspan="" headers=""><?php echo $value->nroFrasco; ?></td>
                           <td colspan="" rowspan="" headers=""><?php echo $unaHr[0]->idHojaDeRuta; ?></td>
                           <td colspan="" rowspan="" headers=""><?php echo $fecha; ?></td>   
                           <td colspan="" rowspan="" headers="">
                              <a href="<?php echo base_url()?>index.php/cfrascos/view/verUnFrasco/<?php echo $value->nroFrasco?>"
                                 class="btn btn-default btn-sm"
                                 title="Ver un frasco" role="button">
                              <i class="fa fa-eye"></i></a>
                           
                           </td>
                        </tr>
                        <?php endforeach ?>
                     </tbody>
                  </table>
               </div>
               <!--fin de tabla -->
            </div>
            <!--boton para agregar una nueva zona -->
             <!--<div class="pull-right"> 
               <a href="<?php echo base_url();?>index.php/czona/view/altaZona"
                  class="btn btn-success btn-md" role="button">Agregar Zona</a>
            </div>-->
         </div>
      </div>
   </section>
   <?php } ?>
   <!-- /.content -->    
</aside>
<!-- /.right-side -->