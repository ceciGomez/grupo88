<aside class="right-side">
<section class="content-header">
<ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
   <li><a href="#">Consentimiento</a></li>
   <li class="active">Ver Consentimientos </li>
  </ol>
  </section>  <!-- fin section header -->
 <section class="content-body">
<div id="container"> 
   <div class="col-md-12">
      <div class="clearfix">&nbsp;</div>
      <h1>Registrar Consentimiento</h1>
      <h4>Buscar donante</h4>
      <p>Ingrese numero de dni de donante o apellido, será utilizado para buscar si la donante existe, caso contrario seleccione dar de alta Donante</p>
 

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


      <p>Total de resultados: <b><?php echo $total; ?></b></p>
       <div >
         <a href="<?php echo base_url();?>index.php/cdonante/view/registrarDonante" class="btn btn-success" role="button">
            Registrar Donante
         </a>
      </div>      

   </div>
   </aside>
</section> <!-- fin section body -->