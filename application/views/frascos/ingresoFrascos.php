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

 </section>






</aside>