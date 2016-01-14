<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Ver Insumos
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Ver Insumos </li>
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
                  <th>Insumos</th>
                  <th>Unidad</th>
                  <th>Gramos</th>
                  <th>Stock de Reposicion</th>
                  <th>Stock de Critico</th>
                  <th>Descripcion Insumo</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($insumos as  $value):?>
                <tr>
                  <td colspan="" rowspan="" headers=""><?php echo $value->insumo ?></td>
                  <td colspan="" rowspan="" headers="">
                    <?php if ($value->unidad != NULL) {
                      echo $value->unidad; 
                    } else {
                      echo '';
                    } ?>
                  </td>
                  <td colspan="" rowspan="" headers="">
                    <?php if ($value->gramos != NULL) {
                      echo $value->gramos; 
                    } else {
                      echo '';
                    } ?>
                  </td>
                  <td colspan="" rowspan="" headers=""><?php echo $value->stockReposicion ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $value->stockCritico ?></td>
                  <td colspan="" rowspan="" headers="">
                    <?php if ($value->descripcionInsumo != NULL) {
                      echo $value->descripcionInsumo; 
                    } else {
                      echo '';
                    } ?>
                  </td>
                  
                  <td colspan="" rowspan="" headers="">
                    <a href="<?php echo base_url()?>index.php/cinsumos/view/verUnInsumo/<?php echo $value->idInsumo?>"
                                class="btn btn-default btn-sm"
                                title="ver insumo" role="button">
                                <i class="fa fa-eye"></i></a>
                                 <a href="<?php echo base_url()?>index.php/cinsumos/view/editarInsumo/<?php echo $value->idInsumo?>"
                                  class="btn btn-default btn-sm" role="button" title="editar un insumo">
                                <i class="fa fa-pencil"></i></a>
                                <a href="<?php echo base_url()?>index.php/cinsumos/view/registrarConsumo/<?php echo $value->idInsumo?>"
                                  class="btn btn-default btn-sm" role="button" title="registrar consumo">
                                <i class="fa fa-pencil"></i></a>
                                <a href="<?php echo base_url()?>index.php/cinsumos/view/eliminarInsumo/<?php echo $value->idInsumo?>"
                                  class="btn btn-default btn-sm" role="button" title="eliminar un insumo">
                                <i class="fa fa-times"></i></a>
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
            <a href="<?php echo base_url();?>index.php/cinsumos/view/altaInsumo"
           class="btn btn-success btn-md" role="button">Agregar Insumos</a>
      </div>
        
      </div>
      
    </div>

  </section><!-- /.content -->    
</aside><!-- /.right-side -->