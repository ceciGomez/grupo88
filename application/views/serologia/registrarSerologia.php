<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Datos de Serologia
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo base_url();?>index.php/page/view/buscaconsentimiento">Consentimiento</a></li>
			<li>
				<a href="<?php echo base_url();?>index.php/page/view/serologia">Serología </a></li>
			<li class="active">Registrar Serología </li>
		</ol>
	</section>
	<section class="content" id="cont">                
		<div class="row">
				<form id="formularioDonante" role="form" method="POST" action="<?php echo base_url()?>index.php/page/altaDonante" >
							<div class="col-xs-4">
								<!-- text input -->
									<div class="form-group">
										<label>Numero de Donante</label>
										<input type="text" id="nro" class="form-control" placeholder="1111111" disabled name="nro"/>
									</div>
								</div>
								<div class="col-xs-4">
								<!-- text input -->
									<div class="form-group">
										<label>Nombre de Donante</label>
										<input type="text" id="nro" class="form-control" placeholder="" disabled name="nombre"/>
									</div>
								</div>
									<div class="col-xs-4">
								<!-- text input -->
									<div class="form-group">
										<label>Apellido de Donante</label>
										<input type="text" id="nro" class="form-control" placeholder="" disabled name="nombre"/>
									</div>
								</form>
				</div>

		<h4>Registrar Resultados</h4> 
			<div  class="container">
				<div class="row">
					<!-- Estudio  - Resultado -->
						<div class="col-xs-3  panel panel-primary">
						<label>VDRL</label>
							<div>
									<div class="radio">
									<label>
									<input type="radio" name="opcion1" id="opciones_1" 
									value="opcion_1" checked>Si
									</label>
									<label>
									<input type="radio" name="opcion1" id="opciones_2" 
									value="opcion_2">No
									</label>
									</div>
							</div>
						</div>
						<!-- -->
						<!-- Estudio  - Resultado -->
						<div class="col-xs-3 panel panel-primary">
						<label>Chagas</label>
							<div>
									<div class="radio">
									<label>
									<input type="radio" name="opcion2" id="opciones_1" 
									value="opcion_1" checked>Si
									</label>
									<label>
									<input type="radio" name="opcion2" id="opciones_2" 
									value="opcion_2">No
									</label>
									</div>
							</div>
						</div>
						<!-- -->
						<!-- Estudio  - Resultado -->
						<div class="col-xs-3 panel panel-primary">
						<label>HVC</label>
							<div>
									<div class="radio">
									<label>
									<input type="radio" name="opcion3" id="opciones_1" 
									value="opcion_1" checked>Si
									</label>
									<label>
									<input type="radio" name="opcion3" id="opciones_2" 
									value="opcion_2">No
									</label>
									</div>
							</div>
						</div>
						<!-- -->
						<!-- Estudio  - Resultado -->
						<div class="col-xs-3 panel panel-primary">
						<label>HIV</label>
							<div>
									<div class="radio">
									<label>
									<input type="radio" name="opcion4" id="opciones_1" 
									value="opcion_1" checked>Si
									</label>
									<label>
									<input type="radio" name="opcion4" id="opciones_2" 
									value="opcion_2">No
									</label>
									</div>
							</div>
						</div>
						<!-- -->
						<!-- Estudio  - Resultado -->
						<div class="col-xs-3 panel panel-primary" >
						<label>HVB</label>
							<div>
									<div class="radio">
									<label>
									<input type="radio" name="opcion5" id="opciones_1" 
									value="opcion_1" checked>Si
									</label>
									<label>
									<input type="radio" name="opcion5" id="opciones_2" 
									value="opcion_2">No
									</label>
									</div>
							</div>
						</div>
						<!-- -->
						<!-- Estudio  - Resultado -->
						<div class="col-xs-3 panel panel-primary" >
						<label>HVB Core</label>
							<div>
									<div class="radio">
									<label>
									<input type="radio" name="opcion6" id="opciones_1" 
									value="opcion_1" checked>Si
									</label>
									<label>
									<input type="radio" name="opcion6" id="opciones_2" 
									value="opcion_2">No
									</label>
									</div>
							</div>
						</div>
						<!-- -->
						<!-- Estudio  - Resultado -->
						<div class="col-xs-3 panel panel-primary" >
						<label>HTLV I - II</label>
							<div>
									<div class="radio">
									<label>
									<input type="radio" name="opcion7" id="opciones_1" 
									value="opcion_1" checked>Si
									</label>
									<label>
									<input type="radio" name="opcion7" id="opciones_2" 
									value="opcion_2">No
									</label>
									</div>
							</div>
						</div>
						<!-- -->
						<!-- Estudio  - Resultado -->
						<div class="col-xs-3 panel panel-primary" >
						<label>Medicación</label>
							<div>
									<div class="radio">
									<label>
									<input type="radio" name="opcion8" id="opciones_1" 
									value="opcion_1" checked>Si
									</label>
									<label>
									<input type="radio" name="opcion8" id="opciones_2" 
									value="opcion_2">No
									</label>
									</div>
							</div>
						</div>
						<!-- -->
						<!-- Estudio  - Resultado -->
						<div class="col-xs-3 panel panel-primary" >
						<label>Fuma</label>
							<div>
									<div class="radio">
									<label>
									<input type="radio" name="opcion9" id="opciones_1" 
									value="opcion_1" checked>Si
									</label>
									<label>
									<input type="radio" name="opcion9" id="opciones_2" 
									value="opcion_2">No
									</label>
									</div>
							</div>
						</div>
						<!-- -->
						<!-- Estudio  - Resultado -->
						<div class="col-xs-3 panel panel-primary" >
						<label>Alcohol</label>
							<div>
									<div class="radio">
									<label>
									<input type="radio" name="opcion10" id="opciones_1" 
									value="opcion_1" checked>Si
									</label>
									<label>
									<input type="radio" name="opcion10" id="opciones_2" 
									value="opcion_2">No
									</label>
									</div>
							</div>
						</div>
						<!-- -->
						<!-- Estudio  - Resultado -->
						<div class="col-xs-3 panel panel-primary" >
						<label>Zona Rural</label>
							<div>
									<div class="radio">
									<label>
									<input type="radio" name="opcion11" id="opciones_1" 
									value="opcion_1" checked>Si
									</label>
									<label>
									<input type="radio" name="opcion11" id="opciones_2" 
									value="opcion_2">No
									</label>
									</div>
							</div>
						</div>
						<!-- -->
						<!-- Estudio  - Resultado -->
						<div class="col-xs-3 panel panel-primary" >
						<label>Vacunas</label>
							<div>
									<div class="radio">
									<label>
									<input type="radio" name="opcion12" id="opciones_1" 
									value="opcion_1" checked>Si
									</label>
									<label>
									<input type="radio" name="opcion12" id="opciones_2" 
									value="opcion_2">No
									</label>
									</div>
							</div>
						</div>
						<!-- -->
						<!-- Estudio  - Resultado -->
						<div class="col-xs-6 panel panel-primary" >
						<label>Usa Drogas</label>
							<div>
									<div class="radio">
									<label>
									<input type="radio" name="opcion13" id="opciones_1" 
									value="opcion_1" checked>Si
									</label>
									<label>
									<input type="radio" name="opcion13" id="opciones_2" 
									value="opcion_2">No
									</label>
									<label>Droga <input id="cantidad"></label>
									<label>Dosis <input id="cantidad"></label>
									</div>
							</div>
						</div>
						<!-- -->
						<!-- Estudio  - Resultado -->
						<div class="col-xs-6 panel panel-primary" >
						<label>Toxoplasmosis</label>
							<div>
									<div class="radio">
									<label>
									<input type="radio" name="opcion14" id="opciones_1" 
									value="opcion_1" checked>Si
									</label>
									<label>
									<input type="radio" name="opcion14" id="opciones_2" 
									value="opcion_2">No
									</label>
									<label>Ig M= <input id="cantidad"></label>
									<label>Ig G= <input id="cantidad"></label>
									</div>
							</div>
						</div>
						<!-- -->
						<div class="col-xs-6">
						<label>Observaciones</label>
						<form name="sugerencias" method="POST" target="resultado">
	      <textarea rows="2" cols="90" name="txtsugerencias">Sus observaciones aquí...</textarea><br>
	      <input type="hidden" name="identificador" >
     	</form>
     </div>

     <div class="col-xs-4 pull-right">
     	<br>
     	<br>
     	<div class="form-group">
     		<button class="btn btn-success btn-lg">Guardar Resultados</button>
     	</div>
     </div>
    </div>
	
		
				</div>


		</section><!-- /.content -->    



</aside><!-- /.right-side -->
