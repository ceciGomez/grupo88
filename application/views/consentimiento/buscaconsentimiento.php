<aside class="right-side">
  <!--section header -->
   <section class="content-header">
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="#">Consentimiento</a></li>
         <li class="active">Ver Consentimientos </li>
      </ol>
      <h1>Registrar Consentimiento</h1>
   </section>
   <!-- fin section header -->
   <!-- section body -->
   <section class="content-body container">
      <div class="row" id="container">
         <div class="col-md-12">
            <h4>Buscar donante</h4>
            <p>Ingrese numero de dni de donante o apellido, será utilizado para buscar si la donante existe, caso contrario seleccione dar de alta Donante</p>
            <!-- tabla para mostrar la informacion -->
            <table class="table table-striped table-bordered">
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
                     <th></th>
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
                        <a href='<?php echo base_url();?>index.php/cdonante/view/verUnaDonante_cons/<?php echo $row->nroDonante?>'class='label label-success'>
                        <span class='fa fa-eye'></span>
                        </a>
                     </td>
                  </tr>
                  <?php endforeach ?>     
                  <?php    } ?> 
               </tbody>
            </table>
            <!-- fin de tabla para mostrar la informacion -->
            <p>Total de resultados: <b><?php echo $total; ?></b></p>
            <div >
               <a href="<?php echo base_url();?>index.php/cdonante/view/registrarDonante" class="btn btn-success" role="button">
               Registrar Donante
               </a>
            </div>
         </div>
      </div>
   </section>
   <!-- fin section body -->
</aside>