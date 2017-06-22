<?php

require "../../headers/conexao.php";

$arquivo = "suprimentos.xls";

$html = '';
$html .= '<table border="1">';
$html .= '<tr>';
$html .='<td style="text-align:center; font-weight: bold;">Tipo</td>';
$html .='<td style="text-align:center; font-weight: bold;">Nome</td>';
$html .='<td style="text-align:center; font-weight: bold;">Dt_Compra</td>';
$html .='<td style="text-align:center; font-weight: bold;">Mes_Compra</td>';
$html .='<td style="text-align:center; font-weight: bold;">Quantidade</td>';
$html .='</tr>';

$res = "SELECT * FROM estoque_suprimento";
$sql = $mysqli->query($res);

while ($row = mysqli_fetch_assoc($sql)) {
    $html .= '<tr>';
    $html .='<td style="text-align:center;">'.$row["tipo"].'</td>';
    $html .='<td style="text-align:center;">'.$row["nome"].'</td>';
    $html .='<td style="text-align:center;">'.$row["dt_compra"].'</td>';
    $html .='<td style="text-align:center;">'.$row["mes"].'</td>';
    $html .='<td style="text-align:center;">'.$row["qtde"].'</td>';
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
