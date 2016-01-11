<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Ver Medios
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Ver Medios </li>
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
                  <th>Medios</th>
                  <th>Descripcion</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              	<?php foreach ($medios as  $value):?>
                <tr>
                  <td colspan="" rowspan="" headers=""><?php echo $value->Medio ?></td>
                  <td colspan="" rowspan="" headers="">
                  	<?php if ($value->DescripcionMedio != NULL) {
                  	 	echo $value->DescripcionMedio; 
                  	} else {
                  		echo '';
                  	} ?>
                  </td>
                  
                  <td colspan="" rowspan="" headers="">
                    <a href="<?php echo base_url()?>index.php/cmedios/view/verUnMedio/<?php echo $value->idMedio?>"
                                class="btn btn-default btn-sm"
                                title="ver medio" role="button">
                                <i class="fa fa-eye"></i></a>
                                 <a href="<?php echo base_url()?>index.php/cmedios/view/editarMedio/<?php echo $value->idMedio?>"
                                  class="btn btn-default btn-sm" role="button" title="editar un medio">
                                <i class="fa fa-pencil"></i></a>
                                <a href="<?php echo base_url()?>index.php/cmedios/view/eliminarMedio/<?php echo $value->idMedio?>"
                                  class="btn btn-default btn-sm" role="button" title="eliminar un medio">
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
        	  <a href="<?php echo base_url();?>index.php/cmedios/view/altaMedio"
        	 class="btn btn-success btn-md" role="button">Agregar Medios</a>
      </div>
        
      </div>
      
    </div>

  </section><!-- /.content -->    
</aside><!-- /.right-side -->