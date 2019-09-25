<?php

	Class Usuario{

		private $pdo;
		public $msgErro = ""; /* tudo ok*/

		public function conectar($nome, $host, $usuario, $senha){


			global $pdo;
			try {

				$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);

			} catch (PDOException $e) {
				$msgErro = $e->getmessage();

			}
		

		}

		public function cadastrar($usuario, $senha, $email, $cartao, $ccv){


			global $pdo;
			/*verficar se já tem email cadastrado*/
			$sql = $pdo->prepare("SELECT id_usuario FROM usuario WHERE nm_email = :e");
			$sql->bindValue(":e",$email);
			$sql->execute();
			if ($sql->rowCount() > 0){
				return false;/*ja cadastrado*/
			}
			else{
				/*caso não esteja cadastrado*/
				$sql = $pdo->prepare("INSERT INTO usuario (nm_usuario, nr_senha, nm_email, nr_cartao, nr_seg) VALUES(:n, :s, :e, :c, :seg)");
				
				$sql->bindValue(":n",$usuario);
				$sql->bindValue(":s",md5($senha));
				$sql->bindValue(":e",$email);
				$sql->bindValue(":c",$cartao);
				$sql->bindValue(":seg",$ccv);
				$sql->execute();
				return true; /*foi cadastrado*/

			}

			
		}
		public function logar($usuario, $senha){

			global $pdo;
			/*verficar se email e senha estao cadastrados*/
			$sql = $pdo->prepare("SELECT id_usuario FROM usuario WHERE nm_usuario = :n AND nr_senha = :s");
			$sql->bindValue(":n",$usuario);
			$sql->bindValue(":s",md5($senha));
			$sql->execute();
			if ($sql->rowCount() > 0){
				/*entrar no sistema*/
				$dado = $sql->fetch();
				session_start();
				$_SESSION['id_usuario'] = $dado['id_usuario'];
				return true;
				/*logado com sucesso*/

			}
			else{

				return false;
				/*nao foi possivel logar*/

			}

		}
	}
?>
