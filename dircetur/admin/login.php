<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="../images/escudo.png">
	<link rel="stylesheet" type="text/css" href="../css/default.css">
	<title>Inicio de Sesion - Administrador</title>
</head>
<body>
<div class="bg">
	<div id="contenedor">
	    <header>    	
	        <div id="logo">
	        	<img src="../images/LOGODIRECTUR .png" alt="Logo Dircetur" height="80px" width="400px" class="responsivelogo">
	        </div>       
	    </header>
	    <section>
	    	<div id="bloque_login">
		        <div>
			        <form id="form_login" method="post" action="../admin/control.php">
				        <table>
				        	<tr>
				            	<td align="center">
									<?php $error=$_GET['error']; 
										if($error=="si"){
											echo "Usuario y/o contraseña incorrectos";
										}
									?>
				                </td>
				            </tr>
				            
				        	<tr class="obj_login">
				            	<td width="auto">Usuario</td>
				            </tr>
				            
				            <tr class="obj_login">
				            	<td><input type="text" name="usuario" class="campo" placeholder="Usuario" required autofocus></td>
				            </tr>
				            
				            <tr class="obj_login">
				                <td>Contraseña</td>
				            </tr>
				            
				            <tr class="obj_login">
				            	<td><input type="password" name="password" class="campo" placeholder="Contraseña" required></td>
				            </tr>
				            
				            <tr class="obj_login">
				            	<td><input type="submit" value="Ingresar" class="boton"></td>
				            </tr>
				        </table>
			        </form>
		        </div>
	    	</div>
	    </section>
	 </div>   
	<footer>
	  <span><strong>Direccion de Comercio exterior y turismo - 2018</span>
	 </footer>  
</div>	
</body>
</html>