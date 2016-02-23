<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Pasteurización
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
   <li><a href="#">Pasteurización</a></li>
   <li class="active">Administrar Biberones </li>
  </ol>
 </section>
 <section class="content-header">
           
</section>
  <section class="content">
    <div >
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                   
                      <thead>
                            <tr>
                              <th>Nro de Biberon</th>
                              <th>Volumen de Leche</th>
                              <th>Volumen Fraccionado</th>
                              <th>Tipo de Leche</th>
                              <th>Estado Biberon</th>
                              <th></th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($biberones as $value) :?>
                       
                          <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $value->idBiberon; ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->volumenDeLeche; ?></td> 
                            <td colspan="" rowspan="" headers=""><?php echo $value->volFraccionado; ?></td>  
                            <td colspan="" rowspan="" headers=""><?php echo $value->tipoDeLeche; ?></td> 
                            <td colspan="" rowspan="" headers=""><?php echo $value->estadoBiberon; ?></td>
                            <td colspan="" rowspan="" headers="">
                              <div >
                                  <a href="<?php echo base_url()?>index.php/cbiberon/view/verUnBiberon/<?php echo $value->idBiberon,"/"?>" 
                                    class="btn btn-default btn-sm" title="ver biberon" role="button"><i class="fa fa-eye"></i></a>
                              
                                  <a href="<?php echo base_url()?>index.php/cbiberon/view/cargaCultivoBiberon/<?php echo $value->idBiberon,"/"?>" class="btn btn-default btn-sm" 
                                        title="cargar cultivo"   role="button"><i class="fa fa-flask"></i></a>

                                  <br>
                                 
                              </div>
                             </td>
                         
                          </tr>
                        <?php endforeach?>
                       </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
  

  </section><!-- /.content -->  

  <div class="pull-right">
  
       <!-- right column -->

  </div>   <!-- /.row -->

                            

</aside><!-- /.right-side -->