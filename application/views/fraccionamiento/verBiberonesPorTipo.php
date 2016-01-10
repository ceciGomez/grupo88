<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>   Ver Biberones </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Ver Biberones </li>
  </ol>
 </section>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
        <h4>Tipo de leche: <?php echo $tipoLeche; ?></h4>
          <div class="box-body table-responsive">
            <table id="example2" class="table table-resonsive table-bordered table-striped">
              <thead>
                <tr>
                  <th>Fecha Creacion</th>
                  <th>Id Pasteurizacion</th>
                  <th>Volumen</th>
                  <th>Estado</th>
                  <th>KCal</th>
                  <th>Crema</th>
                  <th>Gordura</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              	<?php foreach ($biberonesPorTipo as  $value):?>
                <tr>
                  <?php $unaPast = $this->pasteurizacion_model->getUnaPasteurizacion($value->Pasteurizacion_idPasteurizacion); 
                  $fechaArreglada = $this->pasteurizacion_model->arreglarFecha($unaPast[0]->fechaPasteurizacion);?>
                  <td colspan="" rowspan="" headers=""><?php echo $fechaArreglada; ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $value->Pasteurizacion_idPasteurizacion; ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $value->volumenDeLeche; ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $value->estadoBiberon; ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $value->kCali; ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $value->crema; ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $value->gordura; ?></td>
                  <td colspan="" rowspan="" headers="">
                    <a href="<?php echo base_url()?>index.php/cbiberon/view/verUnBiberon/<?php echo $value->idBiberon?>"
                                class="btn btn-default btn-sm"
                                title="ver biberon" role="button">
                                <i class="fa fa-eye"></i>
                    </a>
                    <a href="<?php echo base_url()?>index.php/cfraccionamiento/view/fraccionarBiberon/<?php echo $value->idBiberon?>"
                                class="btn btn-default btn-sm"
                                title="fraccionar biberon" role="button">
                                <i class="fa fa-scissors"></i>
                    </a>
                  </td>
                </tr>
            <?php endforeach ?>
              </tbody>
            </table>
            
          </div>
          <!--fin de tabla -->
        </div>
        <!--boton para agregar una nueva zona -->
        
        
      </div>
      
    </div>

  </section><!-- /.content -->    
</aside><!-- /.right-side -->

