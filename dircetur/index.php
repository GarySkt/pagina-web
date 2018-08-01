<!DOCTYPE html>
<html>
<head>

	<title>Direccion Regional de Comercio Exterior y Turismo</title>

	<!--iconos -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">	
	<!--navbar -->
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="js/navbar_toggle.js">	
	<!--socialbar -->
	<link rel="stylesheet" href="css/socialbar.css">	


	<link rel="stylesheet" href="css/footer.css">
	
	<meta name="viewport" content="wight=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/index.css">
	<!--icon page -->
	<link rel="icon" type="image/png" href="./images/escudo.png">
</head>
<body>
	<!-- navbar-->
	<div class="navbar" id="navbarId">		
			<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Inicio</a>
			<div class="dropdown">
				<button class="dropbtn"><i class="fa fa-university" aria-hidden="true"></i>Institucional</button>
				<div class="dropdown-content">
					<a href="#">Mision y Vision</a>
					<a href="#">Competencia y naturaleza</a>
					<a href="#">Fines</a>
					<a href="#">Funciones</a>
					<a href="#">Organizacion</a>
					<a href="#">Transparencia</a>
				</div>				
			</div>
			<div class="dropdown">
				<button class="dropbtn"><i class="fa fa-folder" aria-hidden="true"></i>Gestion</button>
				<div class="dropdown-content">
					<a href="#">Actividades Oficiales</a>
					<a href="#">Planeamiento y Organizacion</a>
					<a href="#">Informacion Presupuestal</a>					
				</div>				
			</div>	
			<div class="dropdown">
				<button class="dropbtn"><i class="fa fa-truck" aria-hidden="true"></i>Comercio Exterior</button>
				<div class="dropdown-content">
					<a href="#">Objetivos</a>
					<a href="#">Funciones</a>
					<a href="#">Analisis Economico</a>
					<a href="#">Analisis de Exportaciones</a>					
				</div>				
			</div>	
			<div class="dropdown">
				<button class="dropbtn"><i class="fa fa-building" aria-hidden="true"></i>Turismo</button>
				<div class="dropdown-content">
					<a href="#">Objetivos</a>
					<a href="#">Funciones</a>
					<a href="#">Directorio de Empresas turisticas</a>
					<a href="#">Recursos turisticos</a>					
				</div>				
			</div>	
			<div class="dropdown">
				<button class="dropbtn"><i class="fab fa-firstdraft"></i>Artesania</button>
				<div class="dropdown-content">
					<a href="#">Objetivos</a>
					<a href="#">Funciones</a>
					<a href="#">Base legal</a>
					<a href="#">Asociaciones Artesanales</a>
					<a href="#">Lineas Artesanales</a>
					<a href="#">Formato de solicitud de inscripcion</a>					
				</div>				
			</div>	
			<div class="dropdown">
				<button class="dropbtn"><i class="fas fa-info"></i>Datos Generales</button>
				<div class="dropdown-content">
					<a href="#">Directorio institucional</a>
					<a href="#">Formato de solicitud de acceso a la informacion publica</a>					
				</div>				
			</div>
			<a href="#"><i class="fas fa-at"></i>Contactenos</a>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    		<i class="fa fa-bars"></i>
    	</a>
    	<script>
			function myFunction() {
			    var x = document.getElementById("navbarId");
			    if (x.className === "navbar") {
			        x.className += " responsive";
			    } else {
			        x.className = "navbar";
			    }
			}
		</script>		
	</div>
	<!-- navbar END-->
	<div class="socialbar">
		<a href="https://www.facebook.com/dircetur.regiontacna/" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
		<a href="https://www.youtube.com/channel/UC9vpMPOsoDL8m0YIwdD_MTA" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
		<a href="https://www.twitter.com" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>			
	</div>
	<!-- socialbar END-->
	<footer class="footer">		
		<div id="content-footer">
			<p>Direccion regional de comercio exterior y turismo</p>

			<li>
				<a href="https://www.facebook.com/dircetur.regiontacna/" target="_blank" class="facebook-footer"><i class="fab fa-facebook-f"></i></a>
		<a href="https://www.youtube.com/channel/UC9vpMPOsoDL8m0YIwdD_MTA" target="_blank" class="youtube-footer"><i class="fab fa-youtube"></i></a>
		<a href="https://www.twitter.com" target="_blank" class="twitter-footer"><i class="fab fa-twitter"></i></a>
			</li>

		</div>
	</footer>

</body>
</html>