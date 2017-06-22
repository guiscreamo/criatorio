<?php
	require_once "conexao.php";

	if(isset($_POST['btn_cad_suprimentos'])){
		$tipo = $_POST['tipo'];
		$nome = $_POST['nome'];
		$dt_compra = $_POST['dt_compra'];
		$mes = $_POST['mes'];
		$valor = $_POST['valor'];
		$qtde = $_POST['qtde_compra'];
		$total = $_POST['total'];



		$verificacao = mysqli_num_rows($mysqli->query("SELECT * FROM compras WHERE dt_compra = '$dt_compra' AND nome = '$nome' AND qtde = '$qtde' AND valor = '$valor' "));

		if($verificacao == 1){
			
			echo "<div class='alert alert-danger alert-dismissible' role='alert' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Opsss! Esse produto já está cadastrado em nosso estoque</div>";

		}
		else{
			$cadastro = $mysqli->query("INSERT INTO compras(tipo,nome,dt_compra,mes,valor,qtde,total)
				VALUES('$tipo','$nome','$dt_compra','$mes','$valor','$qtde','$total')");
			echo "<div class='alert alert-success alert-dismissible' role='alert' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>O suprimento foi registrado com sucesso!</div>";
			echo "<meta http-equiv=Refresh content=2;url=../paginas/dashboard.php>";
		}
		$verificacao2 = mysqli_num_rows($mysqli->query("SELECT * FROM estoque_suprimento WHERE nome = '$nome'"));

		if($verificacao2 == 1){
			$update_estoque = $mysqli->query("UPDATE estoque_suprimento SET qtde = '$qtde', dt_compra = '$dt_compra', mes = '$mes', valor = '$valor' WHERE nome = '$nome'");
			echo "<div class='alert alert-success alert-dismissible' role='alert' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>O suprimento foi registrado com sucesso!</div>";
			echo "<meta http-equiv=Refresh content=2;url=../paginas/dashboard.php>";
		}
		else{


			$cadastro_estoque  = $mysqli->query("INSERT INTO estoque_suprimento(tipo,nome,dt_compra,mes,valor,qtde)
				VALUES('$tipo','$nome','$dt_compra','$mes','$valor','$qtde')");

			echo "<div class='alert alert-success alert-dismissible' role='alert' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>O suprimento foi registrado com sucesso!</div>";
			echo "<meta http-equiv=Refresh content=2;url=../paginas/dashboard.php>";
	}

}
?>