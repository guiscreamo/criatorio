<?php
	require "../headers/conexao.php";
	require "../headers/session.php";

	$ci = filter_input(INPUT_GET, "ci");
	$gefau = filter_input(INPUT_GET, "gefau");
	$dt_nascto = filter_input(INPUT_GET,"dt_nascto");
	$especie = filter_input(INPUT_GET,"especie");
	$nome_cientifico = filter_input(INPUT_GET, "nome_cientifico");
	$sexo = filter_input(INPUT_GET, "sexo");
	$coloracao = filter_input(INPUT_GET, "coloracao");
	$pai = filter_input(INPUT_GET, "pai");
	$mae = filter_input(INPUT_GET, "mae");
	$anilha = filter_input(INPUT_GET, "anilha");
	$microchip = filter_input(INPUT_GET, "microchip");
	$dt_ident = filter_input(INPUT_GET, "dt_ident");
	$nome = filter_input(INPUT_GET, "nome");
	$nf = filter_input(INPUT_GET, "nf");

	if(isset($_GET['btn_venda_passaros'])){
	$nome_comprador =  $_GET['nome_comprador'];
	$endereco = $_GET['endereco'];
	$bairro = $_GET['bairro'];
	$cep = $_GET['cep'];
	$cidade = $_GET['cidade'];
	$uf = $_GET['uf'];
	$cpf = $_GET['cpf'];
	$rg = $_GET['rg'];
	$telefone = $_GET['telefone'];
	$email = $_GET['email'];
	$gta = $_GET['gta'];
	$valor = $_GET['valor'];
	$origem = $_GET['origem'];

	$insere = $mysqli->query("UPDATE `passaros` SET `nome_comprador` = '$nome_comprador', `endereco` = '$endereco', `bairro` = '$bairro', `cep` = '$cep', `cidade` = '$cidade', `uf` = '$uf', `cpf` = '$cpf', `rg` = '$rg', `telefone` = '$telefone', `email` = '$email' , `gta` = '$gta', `valor` = '$valor', `origem` = '$origem', `status` = 'vendido' WHERE `passaros`.`gefau` = '$gefau'");

	if($insere){
		echo "<div class='alert alert-success alert-dismissible' role='alert' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>A venda foi cadastrada com sucesso!</div>";
		echo "<meta http-equiv=Refresh content=5;url=../paginas/dashboard.php>";
	}
	else{
		echo "<div class='alert alert-danger alert-dismissible' role='alert' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Ocorreu um erro ao cadastrar essa venda, por favor verifique e tente novamente!</div>";
		echo "<meta http-equiv=Refresh content=2;url=../paginas/vender.php>";
	}

	}

?>