<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
      Información de un Centro de Recolección   
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li><a>Centro Recolcción </a></li>
         <li class="active">Información de un Centro de Recolección</li>
      </ol>
   </section>
   <section class="content">
     <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <form id="form" >
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
                           </div>
                     </form>
                  </div>
               </div>
                      <div class="col-md-offset-10">
                           <div>
                              <a class="btn btn-primary btn-sm" href="javascript:window.history.back();">Volver</a>
                           </div>
                        </div>     
                     
                  </div>
               </div>
            </div>
          </div>
      </div>
   </section>
   </aside>

