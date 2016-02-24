<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Reporte de Consentimientos
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
   <li><a href="">Reportes</a></li>
   <li class="active">Reporte de Consentimientos </li>
  </ol>
 </section>
  <section class="content">
    <div class="row">
    	<h4>Lista de Consentimientos</h4>
      <form action="<?php echo base_url()?>index.php/creportes/buscarPorFecha" method="get" accept-charset="utf-8">
        <div class="form-group col-xs-3">
               <label>Indicar Fecha de Inicio</label>
               <div class="form-group">
                  <div class='input-group date' id='datetimepickerPa'>
                     <span class="input-group-addon">
                     <span class="fa fa-calendar"></span>
                     </span>
                     <input type="text" class="form-control" id="fdesde" 
                        data-inputmask="'alias': 'dd-mm-yyyy'" 
                        data-mask name="fdesde" placeholder="dd/mm/aaaa" required/>
                  </div>
               </div>
               <!-- /.input group -->
            </div>
             <div class="form-group col-xs-3">
               <label>Indicar Fecha de Fin</label>
               <div class="form-group">
                  <div class='input-group date' id='datetimepickerPe'>
                     <span class="input-group-addon">
                     <span class="fa fa-calendar"></span>
                     </span>
                     <input type="text" class="form-control" id="fhasta" 
                        data-inputmask="'alias': 'dd-mm-yyyy'" 
                        data-mask name="fhasta" placeholder="dd/mm/aaaa" required/>
                  </div>
               </div>
               <!-- /.input group -->
            </div>
            <div class="content">
              <button class="btn btn-primary btn-md" type="submit">Buscar</button>
            </div>
      </form>
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
                              <th>Cantidad de Frascos(Un)</th>
                              <th>Cantidad de Leche Donada(Lts)</th>
                              <!--th>Cantidad de Recoleccion(Un)</th-->
                              <th>Fecha de Inicio de Consentimiento</th>
                              <th>Fecha de Fin de Consentimiento</th>
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
                            <td colspan="" rowspan="" headers=""><?php echo $value->cantFrascos?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->cantFrascos*0.25?></td>
                            <!--td colspan="" rowspan="" headers=""><?php echo ''?></td--> 
                            <td colspan="" rowspan="" headers=""><?php echo $value->fechaDesde?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->fechaHasta?></td>
                           
                          </tr>
                        <?php endforeach ?>
                        
                       </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>

    </div>
<div class="content pull-right">
       <a href="http://localhost/blh/listaConsentimiento.php?fechaInicio=<?php echo $fechaInicio;?>&fechaFin=<?php echo $fechaFin;?>&idUsuario=<?php echo  $this->session->userdata('idUsuario')?>";
class="btn btn-primary btn-sm" target="_blank" role="button">
                                   <span>Imprimir Reporte</span></i></a>

  </div>   <!-- /.row -->
  </section><!-- /.content -->    
  

 


</aside><!-- /.right-side -->
