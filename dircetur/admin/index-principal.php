<?php session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: ../index.php');
	}
?>
<!doctype html>
<html>
	<head>
		<title>DIRCETUR - Administracion</title>
		<link rel="icon" type="image/png" href="../images/escudo.png">
		<link rel="stylesheet" href="../css/admin-index.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<body>
			<div>
				<a class="login-signup" href="../php/cerrarsesion.php">Cerrar Sesion</a>
			</div>
			<div class="tab">
			  <button class="tablinks" onclick="abrirpestana(event, 'Noticias')" id="defaultOpen">Noticias</button>
			  <button class="tablinks" onclick="abrirpestana(event, 'social_network')">Redes Sociales</button>
			  <button class="tablinks" onclick="abrirpestana(event, 'Banner')">Banner</button>
			  <button class="tablinks" onclick="abrirpestana(event, 'misionvision')">Mision y Vision</button>
			</div>

			<div id="Noticias" class="tabcontent">
			  <h3>Noticias</h3>
			  <p>Aqui van las noticias de la direccion regional de comercio exterior y turismo.</p>
			</div>

			<div id="social_network" class="tabcontent">
			  <h3>Redes Sociales</h3>
			  <form action="#" method="POST">
			  	<p>Facebook</p>			  	
			  	<input type="text" name="facebook" placeholder="https://facebok.com/xxxxxxx">
			  	<br>
			  	<p>Youtube</p>
			  	<input type="text"name="youtube" placeholder="https://youtube.com/xxxxxxx">
			  	<br>
			  	<p>Twitter</p>
			  	<input type="text" name="twitter" placeholder="http://twitter.com/xxxxxxx">
			  </form>
			</div>

			<div id="Banner" class="tabcontent">
			  <iframe src="banner.html" frameborder="0"></iframe>
			  
			</div>

			<div id="misionvision" class="tabcontent">

				<iframe src="misionvision.html" frameborder="0"></iframe>

				
			</div>
			<script>
			function abrirpestana(evt, menuadmin) {
			    var i, tabcontent, tablinks;
			    tabcontent = document.getElementsByClassName("tabcontent");
			    for (i = 0; i < tabcontent.length; i++) {
			        tabcontent[i].style.display = "none";
			    }
			    tablinks = document.getElementsByClassName("tablinks");
			    for (i = 0; i < tablinks.length; i++) {
			        tablinks[i].className = tablinks[i].className.replace(" active", "");
			    }
			    document.getElementById(menuadmin).style.display = "block";
			    evt.currentTarget.className += " active";
			}

			// Get the element with id="defaultOpen" and click on it
			document.getElementById("defaultOpen").click();
			</script>
			

		</body>
	</head>
</html>
