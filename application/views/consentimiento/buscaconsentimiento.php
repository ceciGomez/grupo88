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
          <p>Ingrese numero de dni de donante o apellido, será utilizado para buscar si la donante existe, caso contrario seleccione dar de alta Donante</p>
          <table  class="table table-striped table-bordered col-md-12">
                <thead>
                   <tr>
                      <form id="form" method="GET" action="<?=base_url()?>index.php/consentimiento/buscar">
                         <input type="text" id="query" name="query" />
                         <input type="submit" id="buscar" value="Buscar" />
                      </form>
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
           <div class="pull-right-side content">
            <div class="form-group" style="float: right">
             <a href="<?php echo base_url();?>index.php/cdonante/view/registrarDonante" class="btn btn-success btn-md col-xl-12"
              role="button">
                Registrar Donante
             </a>
            </div>
          </div>      

       </div>
      </div>
  </section> 
</aside>
