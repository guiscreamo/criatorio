<?php
	require "../headers/conexao.php";

	$estoque = "SELECT * FROM compras";
	$query = $mysqli->query($estoque);

	$row = mysqli_fetch_assoc($query);

?>