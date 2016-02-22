<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Ver todos los fraccionamientos
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Ver Todos los fraccionamientos </li>
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
                  <th>id fracc</th>
                  <th>Bebe Receptor</th>
                  <th>Biberon</th>
                  <th>Fecha fracc</th>
                  <th>Volumen</th>
                  <th>Consumido</th>
                  <th>Prescripcion</th>
                 
                  <th></th>
                </tr>
              </thead>
              <tbody>
              	<?php foreach ($fraccionamientos as  $value):?>
                <?php $fechaPmedica = $this->fraccionamiento_model->arreglarFecha($value->PrescripcionMedica_fechaPrescripcion);
                $fechaFrac = $this->fraccionamiento_model->arreglarFecha($value->fechaFraccionamiento);
                $unBebe = $this->bebereceptor_model->getBebereceptor($value->BebeReceptor_idBebeReceptor);
                 ?>
                <tr>
                  <td colspan="" rowspan="" headers=""><?php echo $value->idFraccionamiento; ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $unBebe[0]->apellidoBebeReceptor,' ',$unBebe[0]->nombreBebeReceptor ; ?></td><!--BEBE RECEP  -->
                  <td colspan="" rowspan="" headers=""><?php echo $value->Biberon_idBiberon ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $fechaFrac; ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $value->volumen; ?></td>
                  <?php if ($value->consumido == 0)
                   { 
                      $consumido = "No";
                    }else {
                      $consumido = "Si";
                      }
                   ?>
                  <td colspan="" rowspan="" headers=""><?php echo $consumido;?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $value->PrescripcionMedica_idPrescripcionMedica; ?></td>
                 
                  <td colspan="" rowspan="" headers="">
                    <a href="<?php echo base_url()?>index.php/cfraccionamiento/view/verUnFraccionamiento/<?php echo $value->idFraccionamiento?>"
                                class="btn btn-default btn-sm"
                                title="Ver un fraccionamiento" role="button">
                                <i class="fa fa-eye"></i></a>
                    <a href="<?php echo base_url()?>index.php/cfraccionamiento/view/editarUnFraccionamiento/<?php echo $value->idFraccionamiento?>"
                                class="btn btn-default btn-sm"
                                title="Editar un fraccionamiento" role="button">
                                <i class="fa fa-pencil"></i></a>
                  </td>
                </tr>
            <?php endforeach ?>
              </tbody>
            </table>
            
          </div>
          <!--fin de tabla -->
        </div>
        
        
      </div>
      
    </div>

  </section><!-- /.content -->    
</aside><!-- /.right-side -->

