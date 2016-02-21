<aside class="right-side">
  <section class="content-header col-md-12">
    <ol class="breadcrumb">
       <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
       <li><a href="#">Consentimiento</a></li>
       <li class="active">Registrar Consentimientos </li>
    </ol>
    <h1>Registrar Consentimiento</h1>
  </section>  <!-- fin section header -->
  <section class="content col-md-12" >
      <div class="row container" id="container"> 
       <div class="col-md-12">
          <h4>Buscar donante</h4>
          <p>Ingrese numero de dni o apellido para buscar si la donante existe, caso contrario seleccione agregar Donante</p>
          <table  class="table table-striped table-bordered col-md-12">
                <thead>
                   <tr>
                    <div>
                     <a href="<?php echo base_url();?>index.php/cdonante/view/registrarDonante" class="btn btn-success btn-md"
                      role="button">
                        Agregar Donante
                     </a>
                    </div>
                    <div class="form-group panel panel-default col-md-8" style="margin:auto">
                      <form id="form" method="GET" action="<?=base_url()?>index.php/consentimiento/buscar">
                         <input style="width:630px" type="text" id="query" name="query" /> 
                         <input class="btn btn-primary btn-md" type="submit" id="buscar" value="Buscar" />
                      </form>
                    </div>
                      <div class="clearfix">&nbsp;</div>
                   </tr>
                   <tr>
                      <th>DNI</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Ver</th>
                   </tr> 
                </thead>
                <tbody>
                <?php 
                  if ($result != FALSE){
                      foreach ($result as $row): ?> 
                         <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $row->dniDonante
                            ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $row->nombre ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $row->apellido?></td>
                            <td colspan="" rowspan="" headers="">
                              <div>
                                <a title="Ver Donante" role="button" class="btn btn-default btn-sm" 
                              href="<?php echo base_url();?>index.php/cdonante/view/verUnaDonante_cons/<?php echo $row->nroDonante?>"><i class='fa fa-eye'></i></a>
                              </div> 
                            </td>
                          </tr>
                          <?php endforeach ?>     
                       
                 <?php    } ?> 
                </tbody>
          </table> 
          <p>Total de resultados: <b><?php echo $total; ?></b></p>
      </div>
      </div>
  </section> 
</aside>
