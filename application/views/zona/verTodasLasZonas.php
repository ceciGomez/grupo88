<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Ver Zonas
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Ver Zonas </li>
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
                  <th>Zona</th>
                  <th>Localidad</th>
                  <th>Provincia</th>
                  <th>Dia de Visita</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              	<?php foreach ($zonas as  $value):?>
                <tr>
                  <td colspan="" rowspan="" headers=""><?php echo $value->nombreZona ?></td>
                  <td colspan="" rowspan="" headers="">
                  <?php $unaLocalidad = $this->localidad_model->getUnaLocalidad($value->Localidad_idLocalidad);?>
                  	<?php if ($unaLocalidad) {
                  	 	echo $unaLocalidad[0]->nombreLocalidad; 
                  	} else {
                  		echo '';
                  	} ?>
                  </td>
                  <?php $unaProvincia = $this->provincia_model->getUnaProvincia($unaLocalidad[0]->Provincia_idProvincia); ?>
                  <td colspan="" rowspan="" headers="">
                  	<?php echo $unaProvincia[0]->nombreProvincia; ?>
                  </td>
                  <td colspan="" rowspan="" headers="">
                    <?php echo $value->dia_visita; ?>
                  </td>
                  <td colspan="" rowspan="" headers="">
                    <a href="<?php echo base_url()?>index.php/czona/view/verUnaZona/<?php echo $value->idZona?>"
                                class="btn btn-default btn-sm"
                                title="Ver zona" role="button">
                                <i class="fa fa-eye"></i></a>
                                 <a href="<?php echo base_url()?>index.php/czona/view/editarZona/<?php echo $value->idZona?>"
                                  class="btn btn-default btn-sm" role="button" title="editar una zona">
                                <i class="fa fa-pencil"></i></a>
                                <a href="<?php echo base_url()?>index.php/czona/view/eliminarZona/<?php echo $value->idZona?>"
                                  class="btn btn-default btn-sm" role="button" title="eliminar una zona">
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
        	  <a href="<?php echo base_url();?>index.php/czona/view/altaZona"
        	 class="btn btn-success btn-md" role="button">Agregar Zona</a>
      </div>
        
      </div>
      
    </div>

  </section><!-- /.content -->    
</aside><!-- /.right-side -->

