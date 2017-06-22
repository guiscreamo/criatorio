<?php

require "../../headers/conexao.php";

$arquivo = "Usuários.xls";

$html = '';
$html .= '<table border="1">';
$html .= '<tr>';
$html .='<td style="text-align:center; font-weight: bold;">Nome</td>';
$html .='<td style="text-align:center; font-weight: bold;">Telefone</td>';
$html .='<td style="text-align:center; font-weight: bold;">Email</td>';
$html .='<td style="text-align:center; font-weight: bold;">Login</td>';
$html .='<td style="text-align:center; font-weight: bold;">Senha</td>';
$html .='</tr>';

$res = "SELECT * FROM usuarios";
$sql = $mysqli->query($res);

while ($row = mysqli_fetch_assoc($sql)) {
    $html .= '<tr>';
    $html .='<td style="text-align:center;">'.$row["nome"].'</td>';
    $html .='<td style="text-align:center;">'.$row["telefone"].'</td>';
    $html .='<td style="text-align:center;">'.$row["email"].'</td>';
    $html .='<td style="text-align:center;">'.$row["login"].'</td>';
    $html .='<td style="text-align:center;">'.$row["senha"].'</td>';
    $html .='</tr>';
}


header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Content-type: text/html; charset=UTF-8");
header("Last-Modified: ". gmdate("D, d M YH:i:s") . "GMT");
header("Cache-Control: no-cache,must-revalidate");
header("Pragma: no-cache");
header("Content-type: application/x-msexcel");
header("Content-Disposition: attachment; filename=\"{$arquivo} ");
header("Content-Description: PHP Generated Data");

echo $html;


?>
