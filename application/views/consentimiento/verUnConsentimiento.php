<aside class="right-side">
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Detalle de Consentimiento</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="<?php echo base_url();?>index.php/consentimiento/view/consentimiento/">Consentimiento</a></li>
      <li class="active">Ver un Consentimiento </li>
    </ol>
  </section>
  <section class="content">
      <!--Formulario para mostrar datos -->  <!--style="background-color:lavender;" -->
    <form class="form-horizontal" role="form">

            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-lg-6" > 
                        <div class="panel panel-default">
                            <div class="panel-body"> 
                                <h4><em><strong>Donante</strong></em></h4>
                                 <div class="col-xs-6">
                                        <div class="form-group">
                                        <label for="dni">Dni</label>
                                        <input value="<?php echo $unaDonante[0]->dniDonante;?>" type="text" id="dni" class="form-control" placeholder="Dni" disabled="">
                                        </div>
                                </div>
                                <div class="col-xs-6">
                                        <div class="form-group">
                                        <label for="cnombre">Nombre de Madre Donante</label>
                                        <input value="<?php echo $unaDonante[0]->nombre;?>" type="text" id="cnombre" class="form-control" placeholder="Nombre donante" disabled="">
                                        </div>
                                </div>
                                <div class="col-xs-6">
                                        <div class="form-group">
                                        <label for="apellido">Apellido de Madre Donante</label>
                                        <input value="<?php echo $unaDonante[0]->apellido;?>" type="text" id="apellido" class="form-control" placeholder="Apellido donante" disabled="">
                                        </div>
                                </div>
                                <div class="col-xs-6">
                                       <div class="form-group">
                                        <label>Fecha de Nacimiento de Donante</label>
                                       <div>
                                        <?php
                                        $fechaArray = explode('-', $unaDonante[0]->fechaNacDonante);
                                        $date = new DateTime();
                                        $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                        $fecha= $date->format('d-m-Y'); ?>
                                        <input  value="<?php echo $fecha;?>" class="form-control" id="fechanac" disabled="">
                                        </div>
                                        </div>
                                </div> 
                                <div>
                                  <a href="<?php echo base_url();?>index.php/cdonante/view/verUnaDonante/<?php echo $unaDonante[0]->nroDonante ?>" class="btn btn-default btn-sm" 
                                           role="button"><i class="fa fa-eye"></i></a>
                                </div>
                            </div> 
                       </div>       
                    </div>
                
            <!--empieza segunda columna-->
                <?php if ($unAsociado != FALSE) {?>
                  
                    <div class="col-lg-6"> 
                        <div class="panel panel-default">
                            <div class="panel-body"> 
                                <h4><em><strong>Bebe Asociado</strong></em></h4>
                                 <div class="col-xs-6">
                                        <div class="form-group">
                                        <label for="nombebe">Nombre Bebe Asociado</label>
                                        <input value="<?php echo $unAsociado->nombreBebeAsociado;?>" type="text" id="nombebe" class="form-control" placeholder="" disabled="">
                                    </div>
                                </div>
                               
                                 <div class="col-xs-6">
                                        <div class="form-group">
                                        <label for="apbebe">Apellido Bebe Asociado</label>
                                        <input value="<?php echo $unAsociado->apellidoBebeAsociado;?>" type="text" id="apbebe" class="form-control" placeholder="" disabled="">
                                        </div>
                                </div>

                                 <div class="col-xs-6">
                                        <div class="form-group">
                                        <label for="egest">Edad Gestacional</label>
                                        <input value="<?php echo $unAsociado->edadGestBebAsociado;?>" type="text" id="egest" class="form-control" placeholder="" disabled="">
                                        </div>
                                </div>
                                <div class="row">
                                 <div class="col-xs-6" style="display:none">
                                        
                                </div></div>
                                <div>
                                  <a href="<?php echo base_url();?>index.php/cbebe/view/verBebeasociado" class="btn btn-default btn-sm" 
                                           role="button"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--termina segunda columna-->
               <?php } else {
                    # code...
                }
                 ?>
                    
               </div> 
               <!--empieza tercera columna-->
            <div class="row">
                <div class="col-lg-12"> 
                    <div class="panel panel-default">
                            <div class="panel-body"> 
                     <h4><em><strong>Consentimiento</strong></em></h4>
                                <div class="col-xs-4 ">
                                        <div class="form-group">
                                        <label>Fecha de inicio de donacion(fecha desde)</label>
                                        <div>
                                        <?php
                                        $fechaArray = explode('-', $unConsentimiento[0]->fechaDesde);
                                        $date = new DateTime();
                                        $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                        $fecha= $date->format('d-m-Y'); ?>
                                        <input  class="form-control" id="" disabled=""
                                        value="<?php echo $fecha;?>">
                                        </div> 
                                        </div>
                                </div> 
                                <div class="col-xs-4">
                                        <div class="form-group">
                                        <label>Fecha de finalizacion de donacion(fecha hasta)</label>
                                        <div>
                                        <?php
                                        $fechaArray = explode('-', $unConsentimiento[0]->fechaHasta);
                                        $date = new DateTime();
                                        if ($unConsentimiento[0]->fechaHasta == NULL) {
                                             $fecha= 'consentimiento activo';
                                            } else{
                                                $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                                $fecha= $date->format('d-m-Y');
                                        }

                                            ?>
                                        <input  class="form-control" id="" disabled=""
                                        value="<?php echo $fecha;?>">
                                        </div> 
                                        </div>
                                        
                                </div> 
                                <div class="col-xs-4">
                                        <div class="form-group">
                                        <label>Dia de visita</label>
                                        <input value="<?php echo $unConsentimiento[0]->dia;?>"type="text" id="nombre" class="form-control" placeholder="" name="nombre" disabled="">
                                        </div>

                                </div>
                               <div class="col-xs-3">
                                        <div class="form-group">
                                        <label>Calle</label>
                                        <input value="<?php echo $unConsentimiento[0]->calle;?>" type="text" id="nombre" class="form-control" placeholder="" name="nombre" disabled="">
                                        </div>

                                </div>
                                <div class="col-xs-1">
                                        <div class="form-group">
                                        <label>Número</label>
                                        <input   value="<?php echo $unConsentimiento[0]->altura;?>" type="text" id="nombre" class="form-control" placeholder="" name="nombre" disabled="">
                                        </div>

                                </div>
                                <div class="col-xs-3">
                                        <div class="form-group">
                                        <label>Barrio</label>
                                        <input    value="<?php echo $unConsentimiento[0]->barrio;?>"type="text" id="nombre" class="form-control" placeholder="" name="nombre" disabled="">
                                        </div>

                                </div>
                                <div class="col-xs-1">
                                        <div class="form-group">
                                        <label>Piso</label>
                                        <input    value="<?php echo $unConsentimiento[0]->piso;?>"type="text" id="nombre" class="form-control" placeholder="" name="nombre" disabled="">
                                        </div>

                                </div>
                                <div class="col-xs-1">
                                        <div class="form-group">
                                        <label>Dpto.</label>
                                        <input   value="<?php echo $unConsentimiento[0]->departamento;?>" type="text" id="nombre" class="form-control" placeholder="" name="nombre" disabled="">
                                        </div>

                                </div>
                                <div class="col-xs-1">
                                        <div class="form-group">
                                        <label>Mz.</label>
                                        <input   value="<?php echo $unConsentimiento[0]->mz;?>" type="text" id="nombre" class="form-control" placeholder="" name="nombre" disabled="">
                                        </div>

                                </div>
                                <div class="col-xs-1">
                                        <div class="form-group">
                                        <label>Pc.</label>
                                        <input   value="<?php echo $unConsentimiento[0]->pc;?>" type="text" id="nombre" class="form-control" placeholder="" name="nombre" disabled="">
                                        </div>

                                </div>
                                <div class="col-xs-1">
                                        <div class="form-group">
                                        <label>Zona</label>
                                        <input   value="<?php echo $unConsentimiento[0]->Zona_idZona;?>" type="text" id="" class="form-control" placeholder="Barranqueras"  disabled="">
                                        </div>

                                </div>
                                <div class="col-xs-2">
                                        <div class="form-group">
                                        <label>Pedido Serologia</label>
                                        <div>
                                          <?php $pedido = $unConsentimiento[0]->solicitudSerologia;

                                              if ($pedido == 1)  {
                                                $dato = "si";
                                              }
                                                else{
                                                  $dato = "No";
                                                }
                                            ?>  
                                          </div>
                                        <input   value="<?php echo $dato; ?>" type="text" id="nombre" class="form-control" placeholder="" name="nombre" disabled="">
                                        </div>

                                </div>
                                <div class="col-xs-2">
                                        <div class="form-group">
                                        <label>Permite Foto</label>
                                         <div>
                                          <?php $pedido = $unConsentimiento[0]->permiteFoto;

                                              if ($pedido == 1)  {
                                                $dato = "si";
                                              }
                                                else{
                                                  $dato = "No";
                                                }
                                            ?>  
                                          </div>
                                        <input   value="<?php echo $dato;?>" type="text" id="nombre" class="form-control" placeholder="" name="nombre" disabled="">
                                        </div>

                                </div>
                      </div>

                   </div><!--/col-lg-12-->  

               </div>
            </div>
         </form>    

 </section>                                       
</aside>