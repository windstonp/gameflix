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
	<link rel="stylesheet" type="text/css" href="css/melhorjogo.css">
	<link rel="shortcut icon" type="image/x-png" href="css/img/logoGM1.png">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(window).on('scroll', function() {
			if ($(window).scrollTop()) {
				$('nav').addClass('black');
			}
			else{
				$('nav').removeClass('black');
			}
		})

	</script>
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
				<h1 >MINEIRINHO ULTRA ADVENTURES</h1>
				<p>Muito legal jogo de estilo super mario 64, muitas aventuras e explorações no mundo 3d, baseado em grandes títulos que foram muito bem sucedidos: Super Mario 64, Gex, Crash Bandicoot, Conker's Bad Fur Day !!! Mentira, esse jogo é muito ruim vei tu é loko.</p>
				<a id="jogar" href="erro.php">jogar</a>
		</div>
	</div>		
</body>
</html>