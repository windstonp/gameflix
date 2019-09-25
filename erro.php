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
	<title>Gameflix</title>
	<link rel="stylesheet" type="text/css" href="loli.css">
	<link rel="shortcut icon" type="image/x-png" href="css/img/logoGM1.png">
	<script src="css/jquery/jquery-3.2.1.js"></script>
</head>
<body>
	<div class="glitch">
		<div class="wrapper">
			<nav>
				<div class="logo"><a href="catalogo.php">GAMEFLIX</a></div>
					<ul>
						<li><a class="active" href="catalogo.php">Home</a></li>
						<li><a class="active" href="Contato.php">Contact</a></li>
						<li><a class="active" href="Sobre.php">about us</a></li>
						<li><a class="active" href="sair.php">logout</a></li>
					</ul>
				</div>
			<div id="destaque">
				<div id="textoerro">
					<h1>ERRO 404</h1>
				</div>
				<div class="sair">
					<img src="css/img/errorobo.png" width="200">
					<a id="jogar" href="sair.php">Sair</a>
				</div>
			</div>

	</div>

</body>
</html>