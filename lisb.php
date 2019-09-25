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
	<link rel="stylesheet" type="text/css" href="css/lisb.css">
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
				<h1 >Life is Strange: Before the Storm</h1>
				<p>Life is Strange: Before the Storm é uma nova história independente, que se passa três anos antes dos eventos do primeiro jogo. Desta vez, jogue como Chloe Price, uma rebelde que começa uma amizade inesperada com Rachel Amber, em uma nova história dramática desta franquia.</p>
				<a id="jogar" href="erro.php">jogar</a>
		</div>
	</div>		
</body>
</html>