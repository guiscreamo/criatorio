<?php
	require "../headers/conexao.php";

	$racao_megazoo_papagaios = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Megazoo Extr Papagaios Reproducao 12KG'");
	$racao_megazoo_arara = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Megazoo Extr Araras 12KG'");
	$racao_nutropica_papagaio = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Nutropica Papagaio c/ Frutas 5KG'");
	$racao_nutropica_arara = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Nutropica Arara c/ Frutas 5KG'");
	$racao_nutropica_calopsita = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Nutropica Calopsita c/ Frutas 5KG'");
	$racao_nutropica_papinha = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Nutropica Papinha Psitacideos Alta Energia 5KG'");
	$racao_nutropica_psitacideos = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Nutropica XMS Manutencao Psitacideos 5KG'");
	$racao_nutropica_manutencao = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Nutropica Criador Manutencao Performance 10KG'");
	$racao_nutropica_tucano = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Nutropica Tucano c/ Frutas 5KG'");
	$fruta_banana = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Banana Prata DZ'");
	$fruta_goiaba = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Goiaba Vermelha CX'");
	$fruta_laranja_sc = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Laranja SC'");
	$fruta_laranja_cx = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Laranja CX'");
	$fruta_maca = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Maca Vermelha CX'");
	$fruta_mamao = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Mamao Formosa CX'");
	$fruta_pimentao = $mysqli->query("SELECT SUM(qtde) AS qtde FROM estoque_suprimento WHERE nome = 'Pimentao Verde CX'");

	$row_papagaio_megazoo = mysqli_fetch_assoc($racao_megazoo_papagaios);
	$row_arara_megazoo = mysqli_fetch_assoc($racao_megazoo_arara);
	$row_papagaio_nutropica = mysqli_fetch_assoc($racao_nutropica_papagaio);
	$row_arara_nutropica = mysqli_fetch_assoc($racao_nutropica_arara);
	$row_calopsita_nutropica = mysqli_fetch_assoc($racao_nutropica_calopsita);
	$row_papinha_nutropica = mysqli_fetch_assoc($racao_nutropica_papinha);
	$row_psitacideos_nutropica = mysqli_fetch_assoc($racao_nutropica_psitacideos);
	$row_manutencao_nutropica = mysqli_fetch_assoc($racao_nutropica_manutencao);
	$row_tucano_nutropica = mysqli_fetch_assoc($racao_nutropica_tucano);
	$row_fruta_banana = mysqli_fetch_assoc($fruta_banana);
	$row_fruta_goiaba = mysqli_fetch_assoc($fruta_goiaba);
	$row_fruta_laranja_sc = mysqli_fetch_assoc($fruta_laranja_sc);
	$row_fruta_laranja_cx = mysqli_fetch_assoc($fruta_laranja_cx);
	$row_fruta_maca = mysqli_fetch_assoc($fruta_maca);
	$row_fruta_mamao = mysqli_fetch_assoc($fruta_mamao);
	$row_fruta_pimentao = mysqli_fetch_assoc($fruta_pimentao);
?>