<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos de Recoleccion 
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
   <li><a href="#">Consentimiento</a></li>
   <li class="active"> Centro de Recoleccion </li>
  </ol>
 </section>
     <section class="content" id="cont">                
  <div class="row">



    <form id="formularioCentroRecoleccion" role="form" method="POST" action="<?php echo base_url()?>index.php/page/altaCentroRecoleccion" >

    <form id="formularioCentroRecoleccion" role="form" method="POST" action="<?php echo base_url()?>index.php/page/altaCentroRecoleccion" >



    <form id="formularioDonante" role="form" method="POST" action="<?php echo base_url()?>index.php/page/altaDonante" >
    	    <div class="col-xs-4">
        <!-- text input -->
         <div class="form-group">
          <label>Id de Centro de Recoleccion</label>
          <input type="text" id="nro" class="form-control" placeholder="1111111" disabled name="nombre"/>
         </div>
        </div>
        <div class="col-xs-4">
        <!-- text input -->
         <div class="form-group">
          <label>Nombre</label>
          <input type="text" id="nombre" class="form-control" placeholder="Hospital 4 de Junio" name="nombre"/>
         </div>
        </div>
        <div class="col-xs-4">
        <!-- text input -->
         <div class="form-group">
          <label>Direccion</label>
          <input type="text" id="Direccion" class="form-control" placeholder="Paraguay 545" name="nombre"/>
         </div>
        </div>
        <div class="col-xs-4">
        <!-- text input -->
         <div class="form-group">
          <label>Tel</label>
          <input type="text" id="Tel" class="form-control" placeholder="4467895" name="nombre"/>
         </div>
        </div>
        <div class="col-xs-4">
        <!-- text input -->
         <div class="form-group">
          <label>Localidad</label>
          <input type="text" id="Localidad" class="form-control" placeholder="Resistencia" name="nombre"/>
         </div>
        </div>
         <div class="col-xs-4">
        <!-- text input -->
         <div class="form-group">
          <label>Zona</label>
          <input type="text" id="Zona" class="form-control" placeholder="1" name="nombre"/>
         </div>
        </div>
         <div class="col-xs-4 pull-right">
      <br>
      <br>
      <div class="form-group">
        <button class="btn btn-success btn-lg">Guardar Resultados</button>
      </div>
     </div>
    </div>
    </section>
    </aside>