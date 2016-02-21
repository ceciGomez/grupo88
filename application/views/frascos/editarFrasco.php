<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Editar información de frasco
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li><a>Frascos </a></li>
         <li class="active">Editar frasco</li>
      </ol>
   </section>
   <section class="content">
     <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <form id="formularioeditar" name="formularioeditar" method="POST" role="form" action="<?php echo base_url()?>index.php/cfrascos/editarFrasco">
                        <input class="col-md-4" value="<?php echo $unFrasco[0]->nroFrasco; ?>" type="hidden" id="nroFrasco" class="form-control" name="nroFrasco"/>
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
                                 <input type="text" onkeypress = "return validarNum(event)" id="vol" class="form-control" name="vol" value="<?php echo $unFrasco[0]->volumenDeLeche; ?>">
                              </div>
                              <div class="col-md-6">
                              
                                 <div class="form-group">
                                    <label>Fecha de Extracción</label>
                                    <label title="Editar campo"></label>
                                                <div class='input-group date' id='datetimepicker2'>
                                              <span class="input-group-addon">
                                              <span class="fa fa-calendar"></span>
                                              </span>
                                                <?php
                                                    $fechaArray = explode('-', $unFrasco[0]->fechaExtraccion);
                                                    $date = new DateTime();
                                                    $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                                    $fextraccion= $date->format('d/m/Y'); ?>
                                                <input class="form-control" id="fextraccion" name="fextraccion"
                                                  value="<?php echo $fextraccion;?>" required>
                                              </div>
                                    </div>
                              </div>
                           </div>
                           
                           <div class="row">
                                 <div class="col-md-6">
                                    <label >Tipo de Leche</label>
                                    <p class="form-control-static"><?php echo $tipoLeche; ?></p>
                                 </div>
                                  <div class="col-md-6">
                                    <label >Estado de Frasco</label>
                                          <div>
                                              <select name="estadoFrasco" class="form-control" >
                                                    <option value="Cuarentena">Cuarentena</option>
                                                    <option value="Rechazado">Rechazado</option>
                                              </select>
                                          </div>
                                 </div>
                            </div> <br>
                           <div class="row">
                                <div class="col-md-6">
                                </div>
                                   <div class="col-md-6">
                                        <div class="form-group">
                                           <label>Motivo de baja de frasco</label>
                                              <div>
                                                 <select name="motivoBaja" class="form-control" >
                                                    <option value="Rotura de Frasco">Rotura de Frasco</option>
                                                    <option value="Perdida de Cadena de Frio">Perdida de Cadena de Frio</option>
                                                    <option value="Serología Rechazada">Serología Rechazada</option>
                                                    <option value="Analisis Fisico-Quimico Rechazado">Analisis Fisico-Quimico Rechazado</option>
                                                    <option value="Fecha de Vencimiento Excedida">Fecha de Vencimiento Excedida</option>
                                                 </select>
                                              </div>
                                        </div>
                                     </div>
                            </div>

                               
                         
                             <div class="row">
                                 <div class="col-md-6">
                                    <label>Nivel de Acidez</label>
                                    <input type="text" onkeypress = "return validarNum(event)" id="acidez" class="form-control" name="acidez" value="<?php echo $unFrasco[0]->nivelDeAcidez;?>">
                                 </div>
                                 <div class="col-md-6">
                                    <label>Hematocritos</label>
                                    <input type="text" onkeypress = "return validarNum(event)" id="hematocritos" class="form-control" name="hematocritos" value="<?php echo $unFrasco[0]->hematocritos;?>">
                                 </div>
                           </div>
                      <br>
                           <div class="form-group" style="float: right">
                           <div>
                              <a class="btn btn-danger btn-md" href="<?php echo base_url();?>index.php/cfrascos/view/verFrascos">Cancelar</a>
                              <button  type="submit" class="btn btn-success btn-md" id="guardaEditar">Guardar Cambios
                              </button>
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

<script type="text/javascript">
   $(document).ready(function() {
      $("#zona").hide();
      $("#dia").hide();
      $(".radio label").click(function(event) {
         console.log(event);
         if ($(event.target.children).find(":selected").val()=="zona") {
            $("#zona").show();
            $("#dia").hide();
         }else{
            $("#zona").hide();
            $("#dia").show(); 
         };
      });
   });
</script>


