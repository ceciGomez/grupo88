<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
      Eliminar un Centro de Recolección   
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li><a>Centro Recolcción </a></li>
         <li class="active">Eliminar un Centro de Recolección</li>
      </ol>
   </section>
   <section class="content">
     <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                    <label >Usted va a eliminar el siguiente Centro de Recolección, si esta de acuerdo presione el botón "Eliminar Centro Recolección"</label><br><br><br>
                     <form id="formCentro" class="form-horizontal" data-toggle="validator"role="form" method="POST" action="<?php echo base_url();?>index.php/centrosRec/eliminarCentro">
                        <input type="hidden" id="idCentro" class="form-control" name="idCentro" value="<?php echo $unCentro[0]->idCentroRecoleccion;?>"/>
                        <div class="row">
                           <div class="col-md-6">
                              <label >Nro Centro de Recolección</label>
                              <p class="form-control-static"><?php echo $unCentro[0]->idCentroRecoleccion;?></p>
                           </div>
                           <div class="col-md-6">
                              <label >Nombre Centro de Recolección</label>
                              <p class="form-control-static">
                                 <?php echo $unCentro[0]->nombreCentro;?></p>
                           </div>
                           </div><br>
                           <div class="row">
                                 <div class="col-md-6">
                                    <label >Dirección</label>
                                    <p class="form-control-static"><?php echo $unCentro[0]->direccionCentro;?></p>
                                 </div>
                                 <div class="col-md-6">
                                    <label >Telefono</label>
                                    <p class="form-control-static"> <?php echo $unCentro[0]->telefonoCentro;?></p>
                                       
                                 </div>
                           </div><br>
                           <div class="col-md-offset-3">
                           <a href="<?php echo base_url()?>index.php/centrosRec/view/verCentrosR?>" class="btn btn-danger btn-md" role="button">Cancelar</a>
                            <button type="submit"  aria-hidden="true" id="eliminarCentro" class="btn btn-success btn-md">Eliminar Centro Recolección</button>
                          </div>
                     </form>
                     <br>
                  </div>
               </div>
                           
                     
                  </div>
               </div>
            </div>
          </div>
      </div>
   </section>
   </aside>

