<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Eliminar un Usuario
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Eliminar Usuario </li>
  </ol>
 </section>
  <section class="content">
    <form id="formEliminarZona" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
    action="<?php echo base_url();?>index.php/clogin/eliminarUsuario" >
    <div class="container">
      <h4> Va a eliminar el siguiente usuario</h4>
      <h6>si esta seguro de realizar esta acción, presione el boton "Eliminar Usuario"</h6>
      <input type="hidden" name="idUsuario" value="<?php echo $unUsuario[0]->idUsuario; ?>">
      <br>
      <div class="form-group">
        <label class="col-lg-2">Nombre de Usuario</label>
        <input class="col-lg-2" type="text" name="nombre" 
        value="<?php echo $unUsuario[0]->nombreUsuario; ?>" disabled="">
      </div>
       <div class="form-group">
        <label class="col-lg-2">Nombre</label>
        <input class="col-lg-2" type="text" name="nombre" 
        value="<?php  echo $unUsuario[0]->nombre;?>" disabled="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Apellido</label>
        <input class="col-lg-2" type="text" name="apellido" 
        value="<?php  echo $unUsuario[0]->apellido;?>" disabled="">
      </div>
    </div>
    <div class="pull-right content">
      <div class="form-group">
        <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
        <button type="submit"  aria-hidden="true" id="bEliminarUsuario" class="btn btn-success btn-md">Eliminar Usuario</button>
      </div>
    </div>
    </form>
  </section><!-- /.content -->    
</aside><!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/logininfo.js" type="text/javascript" charset="utf-8" async defer></script>


