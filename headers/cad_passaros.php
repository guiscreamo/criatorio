<?php
	require_once "conexao.php";

	if(isset($_POST['btn_cad_passaros'])){
		$gefau = $_POST['gefau'];
		$dt_nascto = $_POST['dt_nascto'];
		$especie = $_POST['especie'];
		$nome_cientifico = $_POST['nome_cientifico'];
		$sexo = $_POST['sexo'];
		$coloracao = $_POST['coloracao'];
		$pai = $_POST['pai'];
		$mae = $_POST['mae'];
		$anilha = $_POST['anilha'];
		$microchip = $_POST['microchip'];
		$dt_ident = $_POST['dt_ident'];
		$nome = $_POST['nome'];
		$nf = $_POST['nf'];



		$verificacao = mysqli_num_rows($mysqli->query("SELECT * FROM passaros WHERE microchip= '$microchip'"));

		if($verificacao == 1){
			
			echo "<div class='alert alert-danger alert-dismissible' role='alert' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Opsss! Esse pássaro já está cadastrado no nosso sistema</div>";

		}
		else{
			$cadastro = $mysqli->query("INSERT INTO passaros(gefau,dt_nascto,especie,nome_cientifico,sexo,coloracao,pai,mae,anilha,microchip,dt_ident,nome,nf,status)
				VALUES('$gefau','$dt_nascto','$especie','$nome_cientifico','$sexo','$coloracao','$pai','$mae','$anilha','$microchip','$dt_ident','$nome','$nf','estoque')");

			echo "<div class='alert alert-success alert-dismissible' role='alert' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>O´pássaro foi cadastrado com sucesso.</div>";
			echo "<meta http-equiv=Refresh content=2;url=../paginas/dashboard.php>";
	}
}
?>