<aside class="right-side">
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Detalle de Consentimiento</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="<?php echo base_url();?>index.php/consentimiento/view/consentimiento/">Consentimiento</a></li>
      <li class="active">Editar Consentimiento </li>
    </ol>
  </section>
  
  <section class="content">
  <div class="form-group panel panel-default col-md-11" style="margin:auto">
     <!--Formulario para mostrar datos -->  <!--style="background-color:lavender;" -->
    <form data-toggle="validator" class="form-horizontal" role="form" method="POST" action="<?php echo base_url()?>index.php/consentimiento/guardarModificacionesConsentimiento">
      <div class="row-container">
        <div class="form-group col-md-12">
        </div>
                <div class="col-md-12"> 
                    <div class="col-md-2">
                      <div class="form-group">
                      <label for="nroConsentimiento">Nro de Consentimiento</label>
                      
                      <input type="textbox" class="form-control" disabled="" 
                         value="<?php echo $unConsentimiento[0]->nroConsentimiento;?>">
                      <input type="hidden" class="form-control" id="nroConsentimiento"  name="nroConsentimiento"
                         value="<?php echo $unConsentimiento[0]->nroConsentimiento;?>"> 
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                      <label>Fecha de inicio de donacion(fecha desde)</label>
                      <div>
                      <?php
                      $fechaArray = explode('-', $unConsentimiento[0]->fechaDesde);
                      $date = new DateTime();
                      $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                      $fecha= $date->format('d/m/Y'); ?>
                      <input  class="form-control" id="" disabled=""
                      value="<?php echo $fecha;?>" name="">
                      </div> 
                      </div>
                    </div> 
                    <div class="col-md-5">
                          <div class="form-group">
                          <label>Fecha de finalizacion de donacion(fecha hasta)</label>
                          <div>
                          <?php
                          $fechaArray = explode('-', $unConsentimiento[0]->fechaHasta);
                          $date = new DateTime();
                          if ($unConsentimiento[0]->fechaHasta == NULL) {
                            $fecha= "Consentimiento activo";
                          } else {
                              $fecha= "Consentimiento inactivo";
                          }
                          ?>
                          <input  class="form-control" id="" disabled=""
                          value="<?php echo $fecha;?>">
                          </div> 
                          </div>
                  </div>
                </div>
                <div class="col-md-12">    
                    <div class="col-md-2">
                      <div class="form-group">
                      <label>Dia de visita</label>
                      <input value="<?php echo $unConsentimiento[0]->dia;?>"type="text" id="diavisita" class="form-control" placeholder="" name="diaVisita" required>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <span class="help-block with-errors">* Campo Requerido</span>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                      <label>Calle</label>
                      <input value="<?php echo $unConsentimiento[0]->calle;?>" type="text" id="calle" class="form-control" placeholder="" name="calle" required>
                      <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                      <span class="help-block with-errors">* Campo Requerido</span>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                      <label>Número</label>
                      <input value="<?php echo $unConsentimiento[0]->altura;?>" type="text" id="numero" class="form-control" placeholder="" name="numero">
                      </div>
                    </div>
                    <div class="col-md-2">
                            <div class="form-group">
                            <label>Barrio</label>
                            <input value="<?php echo $unConsentimiento[0]->barrio;?>"type="text" id="barrio" class="form-control" placeholder="" name="barrio" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            <span class="help-block with-errors">* Campo Requerido</span>
                            </div>
                    </div>
                   <div class="col-md-1">
                      <div class="form-group">
                      <label>Piso</label>
                      <input value="<?php echo $unConsentimiento[0]->piso;?>"type="text" id="piso" class="form-control" placeholder="" name="piso">
                      </div>
                   </div>
                    <div class="col-md-1">
                            <div class="form-group">
                            <label>Dpto.</label>
                            <input value="<?php echo $unConsentimiento[0]->departamento;?>" type="text" id="dpto" class="form-control" placeholder="" name="dpto">
                            </div>

                    </div>
                    <div class="col-md-1">
                            <div class="form-group">
                            <label>Mz.</label>
                            <input value="<?php echo $unConsentimiento[0]->mz;?>" type="text" id="mz" class="form-control" placeholder="" name="mz">
                            </div>

                    </div>
                    <div class="col-md-1">
                            <div class="form-group">
                            <label>Pc.</label>
                            <input   value="<?php echo $unConsentimiento[0]->pc;?>" type="text" id="pc" class="form-control" placeholder="" name="pc">
                            </div>

                    </div>
              </div>
            <div class="col-md-12">
              <div class="col-md-3">
                    <div class="form-group">
                       <label>Zona</label>
                       <div>
                          <select name="zona" id="zona" value="$valor" class="form-control">
                          <?php foreach ($todasLasZonas as $key):?>
                             <option value="<?php echo  $key->idZona;?>"><?php echo $key->nombreZona; ?>
                             </option>
                          <?php endforeach ?>
                          </select>
                       </div>
                    </div>
              </div>
              <div class="col-md-3">
                      <div class="form-group">
                      <label>Pedido Serologia</label>
                       <div class="radio">
                             <label>
                             <input type="radio" name="pedidoSerologia" id="pedidoSerologia" value="1" checked>
                             Si
                             </label>
                             <label>
                             <input type="radio" name="pedidoSerologia" id="pedidoSerologia" value="0">
                             No
                             </label>
                          </div>     
                      </div>
              </div>
              <div class="col-md-3">
                    <div class="form-group">
                      <label>Permite Foto</label>
                         <div class="radio">
                         <label>
                         <input type="radio" name="permiteFoto" id="permiteFoto" value="1" checked>
                         Si
                         </label>
                         <label>
                         <input type="radio" name="permiteFoto" id="permiteFoto" value="0">
                         No
                         </label>
                        </div>
                    </div>
              </div>
              <div class="col-md-3" >
                 <label for="frasco" >Cantidad de Frascos</label>
                 <div class="from-group">
                    <select name="frascos" id="frascos"  class="form-control">
                       <option value="<?php echo $unConsentimiento[0]->cantFrascos ?>"><?php echo $unConsentimiento[0]->cantFrascos ?></option>
                       <option value="1">1</option>
                       <option value="2">2</option>
                       <option value="3">3</option>
                       <option value="4">4</option>
                       <option value="5">5</option>
                       <option value="6">6</option>
                       <option value="7">7</option>
                       <option value="8">8</option>
                       <option value="9">9</option>
                       <option value="10">10</option>
                    </select>
                </div>
             </div>
          </div>
        </div>
        <div class="pull-right">
            <button type="submit" aria-hidden="true" id="guardaConsentimiento" class="btn btn-success btn-md">
                Guardar Cambios</button>
        </div> 
      </form>
    </div>
    </section>
    </aside>