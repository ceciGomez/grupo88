<aside class="right-side">
  <section class="content-header col-md-12">
    <ol class="breadcrumb">
       <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
       <li><a href="#">Hoja de Ruta</a></li>
       <li class="active">Registrar Ingreso de Hoja de Ruta </li>
    </ol>
    <h1>Registrar Ingreso de Hoja de Ruta</h1>
  </section>  <!-- fin section header -->
  <section class="content col-md-12" >
      <div class="row container" id="container"> 
       <div class="col-md-12">
          <h4>Buscar Hoja de Ruta</h4>
          <p>Ingrese id de Hoja de Ruta, será utilizado para buscar si la hoja de ruta existe</p>
          <table  class="table table-striped table-bordered col-md-12">
                <thead>
                   <tr>
                      <form id="form" method="GET" action="<?=base_url()?>index.php/chojaderuta/buscar">
                         <input type="text" id="query" name="query" />
                         <input type="submit" id="buscar" value="Buscar" />
                      </form>
                      <div class="clearfix">&nbsp;</div>
                   </tr>
                   <tr>
                      <th>Id Hoja de Ruta</th>
                      <th>Fecha de Creacion</th>
                      <th>zona</th>
                      <th></th>
                   </tr> 
                </thead>
                <tbody>
                <?php 
                  if ($result != FALSE){
                      foreach ($result as $row): ?> 
                         <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $row->idHojaDeRuta?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $row->fechaCreacionHdR ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $row->zona?></td>
                            <td colspan="" rowspan="" headers="">
                              <div>
                                <a title="Registrar regreso de hoja de ruta" role="button" class="btn btn-default btn-sm" 
                              href="#"><i class='fa fa-list'></i></a>
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
      </div>
  </section> 
</aside>
