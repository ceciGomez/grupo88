<aside class="right-side">
  <section class="content-header">
    <h1>Usuario</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
      
      <li class="active">Ver Usuarios </li>
    </ol>
  </section>
 <section class="content">
  	<div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body table-responsive">
            <table id="example1" class="table table-resonsive table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Nombre</th>
                  <th>nombre de Usuario</th>
                  <th>Tipo de Usuario</th>
                  <th>Email</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              	<?php foreach ($usuarios as  $value):?>
                <tr>
                  <td colspan="" rowspan="" headers=""><?php echo $value->nombre ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $value->apellido ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $value->nombreUsuario ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $value->tipoUsuario ?></td>
                  <td colspan="" rowspan="" headers=""><?php echo $value->email ?></td>
                  <td colspan="" rowspan="" headers="">
                    <a href="<?php echo base_url()?>index.php/clogin/view/verUnUsuario/<?php echo $value->idUsuario?>"
                                class="btn btn-default btn-sm"
                                title="Ver usuario" role="button">
                                <i class="fa fa-eye"></i></a>
                                 <a href="<?php echo base_url()?>index.php/clogin/view/editarUsuario/<?php echo $value->idUsuario?>"
                                  class="btn btn-default btn-sm" role="button" title="editar una usuario">
                                <i class="fa fa-pencil"></i></a>
                                <a href="<?php echo base_url()?>index.php/clogin/view/eliminarUsuario/<?php echo $value->idUsuario?>"
                                  class="btn btn-default btn-sm" role="button" title="eliminar una usuario">
                                <i class="fa fa-times"></i></a>
                  </td>
                </tr>
            <?php endforeach ?>
              </tbody>
            </table>
            
          </div>
          <!--fin de tabla -->
        </div>
        
        
      </div>
      
    </div>

  </section><!-- /.content --> 
 
 
</aside><!-- /.right-side -->
<script src="<?php echo base_url();?>assets/internals/js/logininfo.js" type="text/javascript" charset="utf-8" async defer></script>
