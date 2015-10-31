<aside class="right-side">
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<h1>Registrar Consentimiento</h1>
    <h4>Buscar donante</h4>
      <p>Ingrese numero de dni de donante, será utilizado para buscar si la donante existe, caso contrario se redirigira a la pagina de alta de Donante</p>
     


<div id="container">	
	<div class="col-md-12">
		<div class="clearfix">&nbsp;</div>

		<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<form id="form" method="GET" action="<?=base_url()?>index.php/page/buscar">
							<input type="text" id="query" name="query" />
							<input type="submit" id="buscar" value="Buscar" />
						</form>
						<div class="clearfix">&nbsp;</div>
					</tr>
					<tr>
						<th>DNI</th>
						<th>Nombre</th>
						<th>Apellido</th>
					</tr>	
				</thead>
				<tbody>
				<?php 
					if ($result != FALSE){
						foreach ($result->result() as $row){
							echo "<tr>";
								echo "<td>".$row->dniDonante."</td>";
								echo "<td>".$row->nombre."</td>";
								echo "<td>".$row->apellido."</td>";
								echo "<td>";
									echo "<a href='#' class='label label-success'><span class='fa fa-eye'></a></span>";
									echo "&nbsp;&nbsp;";
									echo "<a href='#' class='label label-danger'>";
										echo "<span class='glyphicon glyphicon-minus'></a></span>";
								echo "</tr>";
						}	
					}				
				?>
				</tbody>
			</table>	


		<p>Total de resultados: <b><?php echo $total; ?></b></p>

	</div>
</aside>
