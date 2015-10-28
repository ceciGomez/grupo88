<aside class="right-side">
<!-- section header -->
<section class="content-header">
  <h1>
    Generar Hoja de Ruta
  </h1>

  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="#">Hoja de Ruta</a></li>
    <li class="active">Generar Hoja de Ruta</li>
  </ol>
</section>  <!-- fin section header -->
<!-- section body -->

<section class="container-fluid">
  <div class="content row col-xs-10">
  	<a href="#" title="" id="boton">LALALALA</a>

  	<canvas id="pepe" width="400" height="400"></canvas>

  </div>
</section>
<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#boton").on('click', function(event) {
			$.ajax({
				url: '<?php echo base_url()?>index.php/chojaderuta/buscarJson',
				type: 'GET',
				dataType: 'json',
			})
			.done(function(dataServidor) {

				/*var data = [
				    {
				        value: 300,
				        color:"#F7464A",
				        highlight: "#FF5A5E",
				        label: "Red"
				    },
				    {
				        value: 50,
				        color: "#46BFBD",
				        highlight: "#5AD3D1",
				        label: "Green"
				    },
				    {
				        value: 100,
				        color: "#FDB45C",
				        highlight: "#FFC870",
				        label: "Yellow"
				    }
				]*/

				var ctx = document.getElementById("pepe").getContext("2d");
				var myNewChart = new Chart(ctx).PolarArea(dataServidor);
				console.log(dataServidor);
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
		});
	});
</script>