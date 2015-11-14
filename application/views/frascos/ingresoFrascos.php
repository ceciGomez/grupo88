<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
  Registrar Ingreso de frascos al Banco
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
   <li><a href="#">Frascos </a></li>
   <li class="active">Ingreso de Frascos </li>
  </ol>
 </section>
 
<section class="content-fluid">
  <form role="form" method="POST" action="<?php echo base_url()?>index.php/consentimiento/">
         <div class="col-md-12" >	
             			<div class="col-md-6 col-md-offset-2 panel panel-default">
                    <div>
                          <div class="form-group">
                          <label for="nroFrasco" class="col-xs-6" >Ingrese número de frasco</label>
                          <input value="" type="text" id="nroFrasco" name="nroFrasco" class="col-xs-3" class="form-control" placeholder="" >
                          </div>
                    
                  <div class="col-lg-1">
                     <a href="#" class="btn btn-default btn-sm" 
                        role="button"><i class="fa fa-search"></i></a>
                  </div>
                  </div> 
                  </div>
         </div>	
            <div class="col-md-12"> 
              <div class="col-md-2 col-md-offset-2">
                    <div class="form-group-fluid">
              <label >Email:</label>
                  <div>
                  <p class="form-control-static"><?php $donante= $this->donantes_model->getDonante(5); echo $donante[0]->nombre;?></p>
                  </div></div></div>
                  
               <div class="col-sm-2">   
                <div class="form-group-fluid">
              <label >Email:</label>
                  <div>
                  <p class="form-control"><?php $donante= $this->donantes_model->getDonante(5); echo $donante[0]->nombre;?></p>
                  </div>
                  </div>
               </div>
               <div class="col-sm-2">   
                <div class="form-group-fluid">
                <label >Email:</label>
                  <div>
                  <p class="form-control"><?php $donante= $this->donantes_model->getDonante(5); echo $donante[0]->nombre;?></p>
                  </div>
                  </div>
               </div>
             </div> 
  </form>
</section>






</aside>