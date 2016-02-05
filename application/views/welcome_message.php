<!DOCTYPE html>
<html >
   <head>
      <meta charset="UTF-8">
      <title>Banco de Leche Humana</title>
      <link rel="stylesheet" href="<?php echo base_url();?>assets/internals/css/styleLogin2.css">
   </head>
   <body>
      <html>
         <head>
            <meta charset="UTF-8">
            <title>Ingresar al sitio</title>
            <link rel="stylesheet" href="<?php echo base_url();?>assets/internals/css/styleLogin2.css">
         </head>
         <body>
            <div id="main" class="container">
               <form action="<?php echo base_url()?>index.php/cusuarios/loggin" method="post" accept-charset="utf-8" class="wpl-track-me"name="loginform" id="loginform">
                  <p class="login-username">
                     <label for="user_login">Usuario</label> 
                     <input type="text" name="username" id="user_login" class="input" placeholder="Usuario" value="" size="20" /> 
                  </p>
                  <p class="login-password"> 
                     <label for="user_pass">Contraseña</label><input type="password" name="pass" id="user_pass" class="input" placeholder="Contraseña" value="" size="20" /> 
                  </p>
                  <p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Recordarme</label></p>
                  <p class="login-submit"><input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Ingresar" />
                     <input type="hidden" name="redirect_to" value="#"/>
                  </p>
               </form>
            </div>
         </body>
      </html>
   </body>
</html>