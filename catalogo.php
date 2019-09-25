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
	<link rel="stylesheet" type="text/css" href="css/estilocatalogo.css">
	<link rel="shortcut icon" type="image/x-png" href="css/img/logoGM1.png">
	<script src="css/jquery/jquery-3.2.1.js"></script>
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
				<li><a class="active" href="sair.php">RAGE QUIT</a></li>
			</ul>
		</nav>
		<section class="sec1">
	</div>
		</section>
		<section class="content">
				<div id="teste">
					<div class="row">
						<h4>DESTAQUES</h4>
						  <div class="column">
						    <a href="infamous.php"><img src="css/img/infamous.png" width="300" height="225"></a>
						  </div>
						  <div class="column">
						    <a href="dark.php"><img src="css/img/dark.jpg" width="300" height="225"></a>
						  </div>
						  <div class="column">
						    <a href="lisb.php"><img src="css/img/lisbfs.png" width="300" height="225"></a>
						  </div>
						  <br>
					</div>
					<div class="row2">
							<h4>RECOMENDADOS</h4>
						  <div class="column">
						    <a href="lis.php"><img src="css/img/lis.jpg" width="300" height="170"></a>
						  </div>
						  <div class="column">
						    <a href="l4d2.php"><img src="css/img/l4d.jpg" width="300" height="170"></a>
						  </div>
						  <div class="column">
						    <a href="nier.php"><img src="css/img/nier.png" width="300" height="170"></a>
						  </div>
					</div>
					<div class="row2">
							<h4>EM ALTA</h4>
						  <div class="column">
						    <a href="lis2.php"><img src="css/img/lis2.jpg" width="300" height="170"></a>
						  </div>
						  <div class="column">
						    <a href="witcher.php"><img src="css/img/blocowhitcher.jpg" width="300" height="170"></a>
						  </div>
						  <div class="column">
						    <a href="cup.php"><img src="css/img/cuphead.jpg" width="300" height="170"></a>
						  </div>
					</div>
						<div class="row2">
							<h4>JOGOS DE TERROR</h4>
						  <div class="column">
						    <a href="outlast.php"><img src="css/img/outlast.jpg" width="300" height="170"></a>
						  </div>
						  <div class="column">
						    <a href="slender.php"><img src="css/img/Slender.png" width="300" height="170"></a>
						  </div>
						  <div class="column">
						    <a href="melhorjogo.php"><img src="css/img/mineirinho.jpg" width="300" height="170"></a>
						  </div>
					</div>
				</div>
		</section>
		<div id="destaque"> 
				<h1 >Destaque da semana</h1>
				<img src="css/img/witcher.png" width="400">
				<a id="jogar" href="erro.php">jogar</a>
		</div>
	</div>		
</body>
</html>