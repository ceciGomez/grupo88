<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Reporte Pasteurizacion
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
   <li><a href="">Reportes</a></li>
   <li class="active">Reporte de Leche Pasteurizada </li>
  </ol>
  </section>
  <section class="content">
    <div class="row">
    	<h4>Lista de Leche Pasteurizada</h4>
    	<form action="<?php echo base_url()?>index.php/creportes/buscarPorFecha3" method="get" accept-charset="utf-8">
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
               </div>
            <button type="submit">Buscar</button>
      </form>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                            <tr>
                              <th>Pasteurización </th>
                              <th>Responsable</th>
                              <th>Biberón</th>
                              <th>Volumen</th>
                              <th>Estado</th>
                              <th>Tipo De Leche</th>
                              <th>Frasco</th>
                              
                            </tr>
                        </thead>
                        <tbody>
                         <?php foreach ($pepe as $value) :?>
                         <?php
                              $fechaArray = explode('-', $value->fechaPasteurizacion);
                              if ($fechaArray[0]==0 && $fechaArray[1]==0){
                                  $fecha="";
                                }else{
                                  $date = new DateTime();
                                  $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                  $fecha= $date->format('d-m-Y'); 
                                }?>
                          <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $value->idPasteurizacion?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->responsable ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->idBiberon?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->volFraccionado?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->estadoBiberon?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->tipoDeLeche?></td> 
                            <td colspan="" rowspan="" headers=""><?php echo $value->frasco_idfrasco?></td> 
                           
                          </tr>
                        <?php endforeach ?>
                       </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>

      </div>
<div class="content pull-right">
       <a href="http://localhost/blh/listaLechePasteurizada.php?fechaInicio=<?php echo $fechaInicio;?>&fechaFin=<?php echo $fechaFin;?>"
                                  class="btn btn-primary btn-sm" target="_blank" role="button">
                                   <span>Imprimir Reporte</span></i></a>

  </div>   <!-- /.row -->
  </section><!-- /.content -->    
  

 


</aside><!-- /.right-side -->
   