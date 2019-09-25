<?php  

require_once 'classes/usuario.php';

$u = new usuario; 



?>
<!DOCTYPE html>
<html>
<head>
	<title>GameFlix</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="shortcut icon" type="image/x-png" href="css/img/logoGM1.png">
</head>
<body>
	<div  class="login">	
		<form class="input" method="post">
			<center><h2>Sign In</h2></center>
			<input type="text" name="usuario" placeholder="Enter Username" maxlength="55">
			<input type="password" name="senha" placeholder="Enter Password" maxlength="16">
			<a href="registro.php">Registre-se aqui</a>
			<br>
			<button type="submit" class="btn">Sign In</button>
		</form>
		
	<?php
	
			if (isset($_POST['usuario']))
			{

				$usuario = addslashes($_POST['usuario']);
				$senha = addslashes($_POST['senha']);

			if(!empty($usuario) && !empty($senha)){


			$u->conectar("login","localhost","root","");	
			if($u->msgErro == "")
			{ /*tudo ok*/
					if($u->logar($usuario, $senha)){
				
						header("location: catalogo.php");
					}
					else{
						?>
							<div class="msg-erro">
								Usuario não encontrado
							<div>
						<?php
					}
			}
			else{
					?>
						<div class="msg-erro">
							<?php echo "erro:".$u->msgErro; ?>
						</div>
					<?php
				}

			}
			else{
				?>
					<div class="msg-erro">
						Preencha Todos os Campos
					</div>
				<?php
			}

		}
		?>
	</div>
</body>
</html>