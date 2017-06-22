<?php
	require "../headers/conexao.php";

	$usuarios = "SELECT * FROM usuarios";
	$query = $mysqli->query($usuarios);
	$row = mysqli_fetch_assoc($query);
?>