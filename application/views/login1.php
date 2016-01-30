<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Banco de Leche Humana</title>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/internals/css/style.css">
</head>

  <body>

    <div class="wrapper">
	<div class="container">
		<h1>Bienvenido</h1>
		
		<form action="<?php echo base_url()?>index.php/cusuarios/loggin" method="post" accept-charset="utf-8">
			Usuario<input type="text" placeholder="Usuario" name="username">
			Contraseña<input type="password" placeholder="Contraseña" name="pass">
			<button type="submit" id="login-button">Ingresar</button>
		</form>
	<p class="footer">Pagina cargada en <strong>{elapsed_time}</strong> segundos. <br><?php echo  (ENVIRONMENT === 'development') ?  
	'Sistema Desarrollado por <b> "El otro Grupo" </b>' : '' ?></p> <br>
	</div>
	
	<ul class="bg-bubbles">
		<li></li><li></li><li></li><li></li><li></li>
		<li></li><li></li><li></li><li></li><li></li>
		
	</ul>
</div>
    
        
        <script src="<?php echo base_url();?>assets/internals/js/logininfo.js" type="text/javascript" charset="utf-8" async defer></script>

</body>
</html>