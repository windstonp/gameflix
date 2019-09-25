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
	<div  class="loginreg" >	
		<form class="input" method="post">
			<center><h2>Registre-se</h2></center>
			<input type="text" name="usuario" placeholder="Enter Username" maxlength="55">
			<input type="password" name="senha" placeholder="Enter Password" maxlength="16">
			<input type="email" name="email" placeholder="Email" maxlength="55">
			<input type="text" name="cartao" placeholder="Numero do cartão" maxlength="16">
			<input type="text" name="ccv" placeholder="Numero de segurança" maxlength="3">
			<a href="index.php">logue aqui</a>
			<br>
			<button type="submit" class="btn">Registrar-se</button>
		</form>
	
	<?php
		/*verificar se clicou no botao*/
	
			if (isset($_POST['usuario'])){

				$usuario = addslashes($_POST['usuario']);
				$senha = addslashes($_POST['senha']);
				$email = addslashes($_POST['email']);
				$cartao = addslashes($_POST['cartao']);
				$ccv = addslashes($_POST['ccv']);

				/*verificar se não esta vazio*/

			if(!empty($usuario) && !empty($senha) && !empty($email) && !empty($cartao) && !empty($ccv)){


			}
				$u->conectar("login","localhost","root","");
				if($u->msgErro == "") /*tudo ok*/
				{
					if($u->cadastrar($usuario, $senha, $email, $cartao, $ccv)){

						?>
						<div id="msg-sucesso">
							cadastrado com sucesso
						</div>
						<?php
					}
					else{

						?>

						<div class="msg-erro">
							email já cadastrado
						</div>
						<?php
					}
				}
				else{
				?>
					<div class="msg-erro">
						<?php echo "erro:".$u->$msgErro;?>
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


	?>
	</div>
</body>
</html>