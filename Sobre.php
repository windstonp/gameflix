<?php
	session_start();
	if(!isset($_SESSION['id_usuario'])){

		header("location: index.php");
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="whidht=device-whidht, initial-scale=1.0">
	<meta charset="utf-8">
	<title>GameFlix</title>
	<link rel="stylesheet" type="text/css" href="css/sobre.css">
	<link rel="shortcut icon" type="image/x-png" href="css/img/logoGM1.png">
</head>
<body>
	<div class="wrapper">
		<nav>
			<div class="logo"><a href="catalogo.php">GAMEFLIX</a></div>
			<ul>
				<li><a class="active" href="catalogo.php">Home</a></li>
				<li><a class="active" href="Contato.php">Contact</a></li>
				<li><a class="active" href="Sobre.php">about us</a></li>
				<li><a class="active" href="sair.php">logout</a></li>
			</ul>
		</nav>
		<section class="sec1"></section>
		<div id="destaque">
		
			<div id="lateraldireita">
				<p>Nos não copiamos a NETFLIX.</p>
				<p>PS:É verdade este bilhete</p>
			</div>
		
			<div id="centro">
				<img src="css/img/logoGM1.png" height="200" width="200">
			</div>

			<div id="lateralesquerda">
				<p>O melhor serviço de streaming ainda não testado nem lançado de todos os tempos</p>
			</div>
			<p id="reservados">Todos os direitos reservados por / windstonp-kun & gunto-chan</p>
		</div>
	</div>		
</body>
</html>