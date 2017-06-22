<?php
	
	require "../headers/conexao.php";

	$janeiro = $mysqli->query("SELECT SUM(total) AS Total FROM compras WHERE mes = 'Janeiro'");
	$fevereiro = $mysqli->query("SELECT SUM(total) AS Total FROM compras WHERE mes = 'Fevereiro'");
	$marco = $mysqli->query("SELECT SUM(total) AS Total FROM compras WHERE mes = 'Marco'");
	$abril = $mysqli->query("SELECT SUM(total) AS Total FROM compras WHERE mes = 'Abril'");
	$maio = $mysqli->query("SELECT SUM(total) AS Total FROM compras WHERE mes = 'Maio'");
	$junho = $mysqli->query("SELECT SUM(total) AS Total FROM compras WHERE mes = 'Junho'");
	$julho = $mysqli->query("SELECT SUM(total) AS Total FROM compras WHERE mes = 'Julho'");
	$agosto = $mysqli->query("SELECT SUM(total) AS Total FROM compras WHERE mes = 'Agosto'");
	$setembro = $mysqli->query("SELECT SUM(total) AS Total FROM compras WHERE mes = 'Setembro'");
	$outubro = $mysqli->query("SELECT SUM(total) AS Total FROM compras WHERE mes = 'Outubro'");
	$novembro = $mysqli->query("SELECT SUM(total) AS Total FROM compras WHERE mes = 'Novembro'");
	$dezembro = $mysqli->query("SELECT SUM(total) AS Total FROM compras WHERE mes = 'Dezembro'");

	$row_janeiro = mysqli_fetch_assoc($janeiro);
	$row_fevereiro = mysqli_fetch_assoc($fevereiro);
	$row_marco = mysqli_fetch_assoc($marco);
	$row_abril = mysqli_fetch_assoc($abril);
	$row_maio = mysqli_fetch_assoc($maio);
	$row_junho = mysqli_fetch_assoc($junho);
	$row_julho = mysqli_fetch_assoc($julho);
	$row_agosto = mysqli_fetch_assoc($agosto);
	$row_setembro = mysqli_fetch_assoc($setembro);
	$row_outubro = mysqli_fetch_assoc($outubro);
	$row_novembro = mysqli_fetch_assoc($novembro);
	$row_dezembro = mysqli_fetch_assoc($dezembro);

?>