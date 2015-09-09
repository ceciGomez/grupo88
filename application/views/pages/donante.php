<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Datos del Cliente
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Hoja de Ruta</a></li>
			<li class="active">Datos del Cliente </li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content" id="cont">                
		<div class="row">
			<div id="clientData" class="disenio" style="margin-top:30px;">
				<div class="col-xs-12">
					<div class="box box-info">
						<div class="box-body">
							<form role="form" method="POST" action="<?php echo base_url()?>index.php/page/altaDonante" >
								<div class="col-xs-6">
								<!-- text input -->
									<div class="form-group">
										<label>Nombre</label>
										<input type="text" id="nya" class="form-control" placeholder="Juana" name="nombre"/>
									</div>
								</div>
                                <div class="col-xs-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Apellido</label>
                                        <input type="text" id="nya" class="form-control" placeholder="Molina" name="apellido"/>
                                    </div>
                                </div>
								<div class="col-xs-6">
								<!-- text input -->
									<div class="form-group">
                               <label>Fecha de Nacimiento:</label>
                               <div class="input-group">
                                   <div class="input-group-addon">
                                       <i class="fa fa-calendar"></i>
                                   </div>
                                   <input type="text" class="form-control" 
                                   data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="fecha"/>
                               </div><!-- /.input group -->
                           </div><!-- /.form group -->
                            <div class="col-xs-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Lugar de Nacimiento</label>
                                        <input type="text" id="nya" class="form-control" 
                                        placeholder="Resistencia - Chaco" name="lnac"/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Localidad</label>
                                        <input type="text" id="nya" class="form-control" 
                                        placeholder="Resistencia" name="localidad"/>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Domicilio</label>
                                        <input type="text" id="nya" class="form-control" 
                                        placeholder="Calle Falsa 123" name="domicilio"/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Telefono</label>
                                        <input type="text" id="nya" class="form-control" 
                                        placeholder="Resistencia" name="tel"/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Ocupación</label>
                                        <input type="text" id="nya" class="form-control" 
                                        placeholder="Empleada Publica" name="ocupacion"/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Estado Civil</label>
                                        <input type="text" id="nya" class="form-control" 
                                        placeholder="Resistencia" name="estadocivil"/>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Maximo nivel de Estudios Alcanzados</label>
                                        <input type="text" id="nya" class="form-control" 
                                        placeholder="Sec" name="estudios"/>
                                    </div>
                                </div>

                                <div class="col-xs-6">
                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Tipo de Donante</label>
                                        <input type="text" id="nya" class="form-control" 
                                        placeholder="Resistencia" name="lnac"/>
                                    </div>
                                </div>





									<div class="form-group">
										<br />
										<button data-target="#compose-modal"  data-toggle="modal" aria-hidden="true" 
                                        class="btn btn-success btn-lg">Guardar Donante</button>
									</div>
								</div>
							</form>
						</div><!-- /.box-body -->
					</div><!-- /.box -->                        
				</div>

			</div>
			<!-- right column -->
		</div>   <!-- /.row -->
	</section><!-- /.content -->

	<!-- COMPOSE MESSAGE MODAL -->
        <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Detalle del Reclamo: MJGHJGHR - 257534 </h4>
                    </div>
                    <div style="width:500px;margin-left:auto;margin-right:auto;">
                        <div class="form-group modal-header">
                            <label>Nombre y Apellido del Abonado : <b>Jhon Doe</b> </label>
                            <label>Numero de Documento : <b>32.874.586</b> </label>
                            <label>Numero de Cliente : <b>023882</b> - Zona  : 1</label>
                            <label>Direccion : <b>Hernan Cortes 691</b>  </label>
                            <label>Fecha desde que tiene el problema : <b>22/Junio/2014</b> </label>
                            <label>Descripcion del Problema : <p>La imagen de las trasmisiones del mundial se ve lluvioso</p> </label>
                        </div>
                        <div class="form-group modal-header">
                            <label>Estado de la Cuenta</label>
                            <div id="cnt" class="alert alert-warning alert-dismissable" style="margin-top:20px">
                                <p>El Cliente se Encuentra al dia en su Servicio</p>
                                <p>El abonado ya posee Reclamos previos</p>
                            </div>
                            <div id="cnx" class="alert alert-danger alert-dismissable" style="margin-top:20px">
                               <p>El Cliente presenta Inconvenientes en su Servicio</p>
                            </div>
                            <br/>
                            <div class="form-group modal-header">
                                <label>Defina una Prioridad</label>
                                <select class="form-control">
                                    <option value="">Seleccione un Nivel de Prioridad</option>
                                    <option value="">Prioridad Alta</option>
                                    <option value="">Prioridad Media</option>
                                    <option value="">Prioridad Baja</option>
                                </select>
                            </div>
                            <div style="margin:auto;">
                                
                            <button data-dismiss="modal"  data-toggle="modal" data-target="#mssg-modal" aria-hidden="true" class="btn btn-success btn-lg">Validar Reclamo</button>
                            <button data-dismiss="modal" aria-hidden="true" class="btn btn-success btn-lg">Descartar Reclamo</button>

                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

</aside><!-- /.right-side -->

