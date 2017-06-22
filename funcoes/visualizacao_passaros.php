<?php
	require "../headers/conexao.php";

	$passaros_estoque = "SELECT * FROM passaros WHERE status = 'estoque'";
	$passaros_vendidos = "SELECT * FROM passaros WHERE status = 'vendido'";
	$query = $mysqli->query($passaros_estoque);
	$query2 = $mysqli->query($passaros_vendidos);
	$row = mysqli_fetch_assoc($query);
	$row2 = mysqli_fetch_assoc($query2);
?>