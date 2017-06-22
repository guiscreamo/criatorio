<?php
	require "../headers/conexao.php";

	$estoque = "SELECT * FROM estoque_suprimento";
	$query = $mysqli->query($estoque);

	$row = mysqli_fetch_assoc($query);

?>