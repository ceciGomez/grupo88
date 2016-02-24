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
            <div class="col-md-8 panel panel-default col-md-offset-2">
                  <div class="panel-body">
                     <form style="margin: auto" data-toggle="validator" class="form-horizontal" role="form" action="<?php echo base_url() ?>index.php/clogin/altaUsuario" method="post" name="formRegistrarUs" id="formRegistrarUsuario" accept-charset="utf-8">
                        <div class="row">
                           <div class="form-group col-md-6">
                              <div>
                              <label >Nombre</label>
                              <input type="text" id="nombre" class="form-control" placeholder="Escriba el Nombre aqui" name="nombre" required/>
                              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                              <span class="help-block with-errors">* Campo Requerido</span>
                              </div>
                           </div>
                           <div class="form-group col-md-6">
                              <div>
                              <label >Apellido</label>
                              <input type="text" id="apellido" class="form-control" placeholder="Escriba el Apellido aqui" name="apellido" required/>
                              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                              <span class="help-block with-errors">* Campo Requerido</span>
                              </div>
                           </div>
                           <div class=" form-group col-md-6">
                              <div>
                              <label >Email</label>
                              <input type="email" id="mail" class="form-control" placeholder="Escriba el Nombre aqui" name="mail" required/>
                              </div>
                           </div>
                           <div class="form-group col-md-6">
                              <div>
                              <label >Nombre Usuario</label>
                              <input data-error="este campo no puede estar vacio" type="text" id="nomUsuario" class="form-control" placeholder="Escriba el Nombre de usuario aqui" name="nomUsuario" required/>
                              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                              <span class="help-block with-errors">* Campo Requerido</span>
                              </div>
                           </div>
                           <div class="form-group col-md-6">
                              <div>
                              <label >Contraseña</label>
                              <input type="password" data-minlength="6" id="pass" class="form-control" placeholder="Escriba contraseña aqui" name="pass" required/>
                              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                              <span class="help-block with-errors">* Campo Requerido</span>
                              </div>
                           </div>
                           <div class="form-group col-md-6">
                              <div>
                              <label >Repita su Contraseña</label>
                              <input type="password" id="pass2" class="form-control" data-match="#inputPassword" data-match-error="las contraseñas no son iguales" placeholder="Vuelva a escribir la contraseña" name="pass2" required/>
                              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                              <span class="help-block with-errors">* Campo Requerido</span>
                              </div>
                           </div>
                           <div class="form-group col-md-6">
                              <div>
                              <label >Tipo de Usuario</label>
                              <input type="text" id="tipo" class="form-control" placeholder="Escriba tipo usuario aqui" name="tipo" required/>
                              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                              <span class="help-block with-errors">* Campo Requerido</span>
                              </div>
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
   </section>
</aside>
<!-- /.right-side -->
<script src="<?php echo base_url();?>assets/internals/js/logininfo.js" type="text/javascript" charset="utf-8" async defer></script>
<script type="text/javascript">
$('#formRegistrarUs').validator()
</script>
