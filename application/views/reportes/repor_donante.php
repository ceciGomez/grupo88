<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Reporte Donantes
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
   <li><a href="">Reportes</a></li>
   <li class="active">Reporte de Donantes </li>
  </ol>
 </section>
  <section class="content">
    <div class="row">
      <h4>Lista de Contactos de Madres Donantes</h4>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                            <tr>
                              <th>Nro de Donante</th>
                              <th>Apellido</th>
                              <th>Nombre</th>
                              <th>DNI</th>
                              <th>Fecha Nacimiento</th>
                              <th>Contacto</th>
                              <th>Correo Electronico</th>
                             
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($donante as $value) :?>
                         <?php
                              $fechaArray = explode('-', $value->fechaNacDonante);
                              if ($fechaArray[0]==0 && $fechaArray[1]==0){
                                  $fecha="";
                                }else{
                                  $date = new DateTime();
                                  $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                  $fecha= $date->format('d-m-Y'); 
                                }?>
                          <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $value->nroDonante?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->apellido?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->nombre ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->dniDonante?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->fechaNacDonante?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->telefonoDonante?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->emailDonante?></td>
                            
                          </tr>
                        <?php endforeach ?>
                       </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>

    </div>
<div class="content pull-right">
       <a href="http://localhost/blh/listaContacto.php?idUsuario=<?php echo  $this->session->userdata('idUsuario'); ?>"
          class="btn btn-primary btn-sm" target="_blank" role="button">
                                   <span>Imprimir Reporte</span></i></a>

  </div>   <!-- /.row -->
  </section><!-- /.content -->    
  

 


</aside><!-- /.right-side -->
