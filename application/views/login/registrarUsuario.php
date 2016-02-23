<aside class="right-side">
  <section class="content-header">
    <h1>Datos de Usuario</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
      
      <li class="active">Registrar Usuario </li>
    </ol>
  </section>

  <section class="content">
     <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                    
  <form data-toggle="validator" class="form-horizontal" role="form" action="" method="post" name="formRegistrarUs" id="formRegistrarUsuario" accept-charset="utf-8">
                        <div class="row">
                          <div class="col-md-6">
                              <label >Nombre</label>
                              <input type="text" id="nombre" class="form-control" placeholder="Escriba el Nombre aqui" name="nombre" required/>
                              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <span class="help-block with-errors">* Campo Requerido</span>
                           </div>
                           <div class="col-md-6">
                              <label >Apellido</label>
                              <input type="text" id="apellido" class="form-control" placeholder="Escriba el Apellido aqui" name="apellido" required/>
                              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <span class="help-block with-errors">* Campo Requerido</span>
                           </div>
                           <div class="col-md-6">
                              <label >Email</label>
                              <input type="mail" id="pass" class="form-control" placeholder="Escriba el Nombre aqui" name="pass"/>
                              
                           </div>
                           <div class="col-md-6">
                              <label >Nombre Usuario</label>
                              <input type="text" id="nomUsuario" class="form-control" placeholder="Escriba el Nombre de usuario aqui" name="nomUsuario" required/>
                              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <span class="help-block with-errors">* Campo Requerido</span>
                           </div>
                           <div class="col-md-6">
                              <label >Contraseña</label>
                              <input type="password" id="pass" class="form-control" placeholder="Escriba contraseña aqui" name="pass" required/>
                             <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <span class="help-block with-errors">* Campo Requerido</span>
                           </div>
                           <div class="col-md-6">
                              <label >Repita su Contraseña</label>
                              <input type="password" id="pass" class="form-control" placeholder="Escriba contraseña aqui" name="pass" required/>
                              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <span class="help-block with-errors">* Campo Requerido</span>
                           </div>
                           <div class="col-md-6">
                              <label >Tipo de Usuario</label>
                              <input type="text" id="tipo" class="form-control" placeholder="Escriba tipo usuario aqui" name="tipo" required/>
                              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <span class="help-block with-errors">* Campo Requerido</span>
                           </div>
                        </div>
                        <br>
                        <div class="" style="float: right">
                          <button id="bregistrarUs" class="btn btn-success btn-md" type="submit"> Registrar Usuario</button>
                        </div>
                     
</form>
                  </div>
               </div>
            </div>
          </div>
      </div>
   </section>
 
</aside><!-- /.right-side -->
<script src="<?php echo base_url();?>assets/internals/js/logininfo.js" type="text/javascript" charset="utf-8" async defer></script>
