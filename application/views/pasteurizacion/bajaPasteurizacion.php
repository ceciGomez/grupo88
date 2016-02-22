<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h2>
   Cancelar Pasteurización
  </h2>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Cancelar Pasteurización </li>
  </ol>
 </section>
  <section class="content">
    <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                    <form id="formCancela" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
                           action="<?php echo base_url();?>index.php/cpasteurizacion/cancelaIngreso" >
                      
                      <h3>Usted cancelará la siguiente pasteurización: </h3><br>
                      <div class="row">
                            <div class="col-md-12">
                              <input type="hidden" name="idPasteurizacion" value="<?php echo $unaPasteurizacion[0]->idPasteurizacion; ?>">
                              <label>Nro. Pasteurización</label>
                              <input type="text" name="idPasteurizacion" 
                                     value="<?php echo $unaPasteurizacion[0]->idPasteurizacion; ?>" disabled="">
                            </div>
                      </div><br>
                      <div class="row">
                            <div class="col-md-12">
                                    <?php
                                      $fechaArray = explode('-', $unaPasteurizacion[0]->fechaPasteurizacion);
                                      if ($fechaArray[0] == 0){
                                          $fecha="";
                                        }else{ 
                                          $date = new DateTime();
                                          $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                          $fecha= $date->format('d-m-Y'); 
                                    }?>
                              <label>Fecha de Pasteurización</label>
                              <input type="text" name="nombreLocalidad" 
                              value="<?php echo $fecha; ?>"disabled="">
                            </div>
                      </div><br>
                  <h6>Si es correcto presione "Continuar".</h6>
                  <h6>De lo contrario presione "Cancelar" para continuar con la pasteurizacion.</h6>
                      <div class="col-md-12">
                          <div class="form-group" style="float: right">
                              <a class="btn btn-danger btn-md" href="<?php echo base_url();?>index.php/cpasteurizacion/view/nuevaPasteurizacion/<?php echo $unaPasteurizacion[0]->idPasteurizacion;?>">Cancelar</a>
                              <button type="submit"  aria-hidden="true" id="botonCancelaPast" class="btn btn-success btn-md">Confirmar</button>
                          </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </section><!-- /.content -->    
</aside><!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/zonainfo.js" type="text/javascript" charset="utf-8" async defer></script>


