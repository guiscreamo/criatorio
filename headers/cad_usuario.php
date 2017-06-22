<?php
	require_once "conexao.php";
	require_once "session.php";

	if (isset($_POST['btn'])) {
		$nome = $_POST['nome'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$login = $_POST['login'];
		$senha = md5($_POST['senha']);

		if(empty($nome)){
			echo "<div class='alert alert-danger alert-dismissible' role='alert' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Por favor preencha o campo <b>Nome</b>!</div>";
		}
		if(empty($telefone)){
			echo "<div class='alert alert-danger alert-dismissible' role='alert' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Por favor preencha o campo <b>Telefone</b>!</div>";
		}
		if(empty($email)){
			echo "<div class='alert alert-danger alert-dismissible' role='alert' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Por favor preencha o campo <b>Email</b>!</div>";
		}
		if(empty($login)){
			echo "<div class='alert alert-danger alert-dismissible' role='alert' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Por favor preencha o campo <b>Login</b>!</div>";
		}
		if(empty($senha)){
			echo "<div class='alert alert-danger alert-dismissible' role='alert' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Por favor preencha o campo <b>Senha</b>!</div>";
		}
		else{
			$verifica = mysqli_num_rows($mysqli->query("SELECT * FROM usuarios WHERE nome = '$nome' AND telefone = '$telefone' AND email = '$email' AND login = '$login' "));
			if($verifica == 1){
				echo "<div class='alert alert-danger alert-dismissible' role='alert' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Opsss! Esse usuário já está cadastrado no nosso sistema</div>";
			}
			else{
				$mysqli->query("INSERT INTO usuarios(nome,telefone,email,login,senha)VALUES('$nome','$telefone','$email','$login','$senha')");

				echo "<div class='alert alert-success' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'>O usuário foi cadastrado com sucesso!</div>";
        		echo "<meta http-equiv=Refresh content=2;url=../paginas/dashboard.php>";

			}
		}
	}
?>