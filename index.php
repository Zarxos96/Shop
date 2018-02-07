<?php
session_start();
include ('./lib/php/requetes_serveur.php');
include ('./lib/php/connect.php');
?>
<html>
	<head>
		<title>Carabane et Compagnie</title>
		<link rel="stylesheet" type="text/css" href="./lib/css/mysite_style.css" />
		<meta charset="iso-8859-1" />
	</head>
	<body>

	<div id="wrapper">
		<header>
			<h3 id="enseigne">Carabane et Compagnie</h3>
			<figure>
				<img src="./images/header.jpg" alt="carabanenco" />
			</figure>
		</header>	

		<section id="contenu">
			<nav id="menu" class="txtGras">
				<?php
					include('./lib/php/menu.php');
				?>
			</nav>
			<section id="main">
				<?php
				if(!isset($_SESSION['page'])) {
					$_SESSION['page']="./pages/accueil.php";
				}
				//si il existe une variable "page" dans l'url
				if(isset($_GET['page'])) {
					$_SESSION['page'] = $_GET['page'];
				}
				
				if(file_exists('./pages/'.$_SESSION['page'])) {				
					include ('./pages/'.$_SESSION['page']);
				}
				else {
					print "<span class='txtGras'>Oups!!</span>";
				}
				?>
			</section>	
			
		</section>
		
	</div>

	<footer>
		&copy;Julien Schoenaers	
	</footer>

</body>
</html>