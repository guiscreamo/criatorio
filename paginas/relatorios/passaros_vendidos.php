<?php

require "../../headers/conexao.php";

$arquivo = "Passaros_vendidos.xls";

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
$html .='<td style="text-align:center; font-weight: bold;">NOME COMPRADOR</td>';
$html .='<td style="text-align:center; font-weight: bold;">ENDERECO</td>';
$html .='<td style="text-align:center; font-weight: bold;">BAIRRO</td>';
$html .='<td style="text-align:center; font-weight: bold;">CEP</td>';
$html .='<td style="text-align:center; font-weight: bold;">CIDADE</td>';
$html .='<td style="text-align:center; font-weight: bold;">UF</td>';
$html .='<td style="text-align:center; font-weight: bold;">CPF/CNPJ</td>';
$html .='<td style="text-align:center; font-weight: bold;">IE/RG</td>';
$html .='<td style="text-align:center; font-weight: bold;">TELEFONE</td>';
$html .='<td style="text-align:center; font-weight: bold;">EMAIL</td>';
$html .='<td style="text-align:center; font-weight: bold;">GTA</td>';
$html .='<td style="text-align:center; font-weight: bold;">VALOR</td>';
$html .='<td style="text-align:center; font-weight: bold;">ORIGEM</td>';
$html .='</tr>';

$res = "SELECT * FROM passaros WHERE status = 'vendido' ";
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
    $html .='<td style="text-align:center;">'.$row["nome_comprador"].'</td>';
    $html .='<td style="text-align:center;">'.$row["endereco"].'</td>';
    $html .='<td style="text-align:center;">'.$row["bairro"].'</td>';
    $html .='<td style="text-align:center;">'.$row["cep"].'</td>';
    $html .='<td style="text-align:center;">'.$row["cidade"].'</td>';
    $html .='<td style="text-align:center;">'.$row["uf"].'</td>';
    $html .='<td style="text-align:center;">'.$row["cpf"].'</td>';
    $html .='<td style="text-align:center;">'.$row["rg"].'</td>';
    $html .='<td style="text-align:center;">'.$row["telefone"].'</td>';
    $html .='<td style="text-align:center;">'.$row["email"].'</td>';
    $html .='<td style="text-align:center;">'.$row["gta"].'</td>';
    $html .='<td style="text-align:center;">'.$row["valor"].'</td>';
    $html .='<td style="text-align:center;">'.$row["origem"].'</td>';
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
