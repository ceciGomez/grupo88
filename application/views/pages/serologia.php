<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos de Serologia
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">Consentimiento</a></li>
   <li class="active">Serología </li>
  </ol>
 </section>
  <section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Estudio</th>
                                <th>Resultado</th>
                                <th>Valor</th>
                                
                            </tr>
                        </thead>
                       <tbody></tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

  </section><!-- /.content -->    <div class="pull-right">
  
     <div class="form-group">
    

      <button data-target="#compose-modal"  data-toggle="modal" aria-hidden="true" 
             class="btn btn-success btn-lg">Guardar Serologia</button>
         </div>                  
    </div>

   </div>

   <!-- right column -->

  </div>   <!-- /.row -->

 

 <!-- COMPOSE MESSAGE MODAL -->
        <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Detalle de Bebe Asociado </h4>
                    </div>
                    <div style="width:500px;margin-left:auto;margin-right:auto;">
                        <div class="form-group modal-header">
                            <label>Nombre y Apellido del Bebe Asociado : <b>Juanita Doe</b> </label>
                            <label>Numero de Documento : <b>32.874.586</b> </label>
                            <label> Fecha de Nacimient : <b>13/10/2014</b> </label>
                        </div>
                        
                           
                            <br/>
                            
                            <div style="margin:auto;">
                                
                            <button data-dismiss="modal"  data-toggle="modal" data-target="#mssg-modal" aria-hidden="true" class="btn btn-success btn-lg">Guardar Bebe Asociado</button>
                            <button data-dismiss="modal" aria-hidden="true" class="btn btn-success btn-lg">Descartar Bebe Asociado</button>

                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

</aside><!-- /.right-side -->

