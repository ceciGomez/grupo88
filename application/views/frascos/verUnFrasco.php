<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Informacion de frasco
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li><a>Frascos </a></li>
         <li class="active">Ver un frasco </li>
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
                              <label >Nro de Frasco</label>
                              <p class="form-control-static"><?php echo $unFrasco[0]->nroFrasco; ?></p>
                           </div>
                           <div class="col-md-6">
                              <label >Nombre y Apellido de Donante</label>
                              <p class="form-control-static">
                                 <?php echo $unaDonante[0]->nombre; echo ' '; echo $unaDonante[0]->apellido;?></p>
                           </div>
                           </div><br>
                           <div class="row">
                           <div class="col-md-6">
                              <label >Volumen de leche</label>
                              <p class="form-control-static"><?php echo $unFrasco[0]->volumenDeLeche; ?></p>
                           </div>
                           <div class="col-md-6">
                              <label >Fecha de Extracción</label>
                              <p class="form-control-static"> 
                                 <?php
                                       $fechaArray = explode('-', $unFrasco[0]->fechaExtraccion);
                                       if ($fechaArray[0] == 0){
                                           $fecha="";
                                         }else{ 
                                           $date = new DateTime();
                                           $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                           $fecha= $date->format('d-m-Y'); 
                                       }?>
                                          <?php echo $fecha;?> </p>
                           </div>
                           </div><br>
                           <div class="row">
                           <div class="col-md-6">
                              <label >Tipo de Leche</label>
                              <p class="form-control-static"><?php echo $tipoLeche; ?></p>
                           </div>
                           <div class="col-md-6">
                              <label >Estado de Frasco</label>
                              <p class="form-control-static"><?php echo $unFrasco[0]->estadoDeFrasco; ?></p>
                           </div>
                           </div><br>
                           <div class="row">
                           <div class="col-md-6">
                              <label >Nivel de Acidez</label>
                              <p class="form-control-static"> <?php echo $unFrasco[0]->nivelDeAcidez; ?></p>
                           </div>
                           
                           <div class="col-md-6">
                              <label >Hematocritos</label>
                              <p class="form-control-static"><?php echo $unFrasco[0]->hematocritos; ?></p>
                           </div>
                           </div>
                           </div>
                           <div class="col-md-offset-2">
                           <div>
                              <a class="btn btn-danger btn-sm" href="javascript:window.history.back();">Volver</a>
                              <a href="<?php echo base_url();?>index.php/cfrascos/view/registrarAnalisisFrasco/<?php echo $unFrasco[0]->nroFrasco;?>"
                                class="btn btn-success btn-sm" role="button">Registrar Análisis</a>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
          </div>
      </div>
   </section>
   </aside>

