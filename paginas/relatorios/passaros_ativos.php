<?php

require "../../headers/conexao.php";

$arquivo = "Passaros_em_estoque.xls";

$html = '';
$html .= '<table border="1">';
$html .= '<tr>';
$html .='<td style="text-align:center; font-weight: bold;">CI</td>';
$html .='<td style="text-align:center; font-weight: bold;">GEFAU</td>';
$html .='<td style="text-align:center; font-weight: bold;">DT_NASCTO</td>';
$html .='<td style="text-align:center; font-weight: bold;">ESPECIE</td>';
$html .='<td style="text-align:center; font-weight: bold;">NOME CIENTIFICO</td>';
$html .='<td style="text-align:center; font-weight: bold;">SEXO</td>';
$html .='<td style="text-align:center; font-weight: bold;">COLORACAO</td>';
$html .='<td style="text-align:center; font-weight: bold;">PAI</td>';
$html .='<td style="text-align:center; font-weight: bold;">MAE</td>';
$html .='<td style="text-align:center; font-weight: bold;">ANILHA</td>';
$html .='<td style="text-align:center; font-weight: bold;">MICROCHIP</td>';
$html .='<td style="text-align:center; font-weight: bold;">DT_IDENT</td>';
$html .='<td style="text-align:center; font-weight: bold;">NOME</td>';
$html .='<td style="text-align:center; font-weight: bold;">NF</td>';
$html .='</tr>';

$res = "SELECT * FROM passaros WHERE status = 'estoque' ";
$sql = $mysqli->query($res);

while ($row = mysqli_fetch_assoc($sql)) {
    $html .= '<tr>';
    $html .='<td style="text-align:center;">'.$row["ci"].'</td>';
    $html .='<td style="text-align:center;">'.$row["gefau"].'</td>';
    $html .='<td style="text-align:center;">'.$row["dt_nascto"].'</td>';
    $html .='<td style="text-align:center;">'.$row["especie"].'</td>';
    $html .='<td style="text-align:center;">'.$row["nome_cientifico"].'</td>';
    $html .='<td style="text-align:center;">'.$row["sexo"].'</td>';
    $html .='<td style="text-align:center;">'.$row["coloracao"].'</td>';
    $html .='<td style="text-align:center;">'.$row["pai"].'</td>';
    $html .='<td style="text-align:center;">'.$row["mae"].'</td>';
    $html .='<td style="text-align:center;">'.$row["anilha"].'</td>';
    $html .='<td style="text-align:center;">'.$row["microchip"].'</td>';
    $html .='<td style="text-align:center;">'.$row["dt_ident"].'</td>';
    $html .='<td style="text-align:center;">'.$row["nome"].'</td>';
    $html .='<td style="text-align:center;">'.$row["nf"].'</td>';
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
