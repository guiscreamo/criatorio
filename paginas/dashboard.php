<?php
  require_once "../headers/conexao.php";
  require"../headers/session.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php $today = date("F j, Y, g:i a");?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Area Administrativa</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Css -->
    <link href="../css/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dashboard.php"><img src="../imagens/logo.png" alt="Criatorio de Aves do Brasil" id="logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="menu">
      <ul class="nav navbar-nav">
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li id="horario"><?php echo $today ?></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Minha Conta <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="alterar_senha.php">Mudar Senha</a></li>
            <li><a href="?logout=sim">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
            <?php
                if(@$_GET['logout']){
                session_destroy();
                echo "<div class='alert alert-info' style='position:absolute; top:0; left:0; width:100%; text-align:center; font-size:20px;'>Até logo!</strong></div>";
                echo "<meta http-equiv=Refresh content=1;url=../index.php>";
                }
            ?>
    </nav><!-- Menu principal -->

    <!-- INICIO MENU LATERAL -->

       <nav class="pushy pushy-left" data-focus="#first-link">
            <div class="pushy-content">
                <ul>
                    <li class="pushy-submenu">
                        <button id="first-link">Cadastros</button>
                        <ul>
                            <li class="pushy-link"><a href="cadastro_passaros.php">Pássaros</a></li>
                            <li class="pushy-link"><a href="cadastro_usuarios.php">Usuários</a></li>
                            <li class="pushy-link"><a href="cadastro_suprimentos.php">Suprimentos</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button id="first-link">Visualização</button>
                        <ul>
                            <li class="pushy-link"><a href="visualizacao_passaros.php">Pássaros</a></li>
                            <li class="pushy-link"><a href="visualizacao_usuarios.php">Usuários</a></li>
                            <li class="pushy-link"><a href="visualizacao_suprimentos.php">Suprimentos</a></li>
                            <li class="pushy-link"><a href="visualizacao_compras.php">Compras</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button id="first-link">Relatórios</button>
                        <ul>
                            <li class="pushy-link"><a href="relatorios/passaros_ativos.php">Pássaros Ativos</a></li>
                            <li class="pushy-link"><a href="relatorios/passaros_vendidos.php">Pássaros Vendidos</a></li>
                            <li class="pushy-link"><a href="relatorios/usuarios.php">Usuários</a></li>
                            <li class="pushy-link"><a href="relatorios/suprimentos.php">Suprimentos</a></li>
                            <li class="pushy-link"><a href="relatorios/compras.php">Compras</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav> <!-- Fim MENU LATERAL -->

        <!-- FIM MENU LATERAL -->


        <div class="site-overlay"></div>

        <div class="container-fluid">
          <button class="menu-btn">
            <span class="glyphicon glyphicon-align-justify"></span>
          </button>

          <div class="page-header">
            <h2>Painel Administrativo</h2>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <div id="container"></div>
            </div>
            <div class="col-sm-6">
              <div id="vendas"></div>
            </div>
          </div>

            <div class="row">
                <div class="col-sm-6">
                    <div id="suprimentos"></div>
                </div>
                <div class="col-sm-6">
                    <div id="total_gastos"></div>
                </div>
            </div>

        </div><!-- ./ Cointainer -->

        <!-- SELECT TABELA PASSARO GRAFICO -->

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/pushy.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script type="text/javascript">
     Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total de Pássaros Cadastrados'
    },
    subtitle: {
        text: 'Criatorio de Aves do Brasil'
    },
    xAxis: {
        categories: [
            'Total'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:5px; margin-right:5px;"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.1,
            borderWidth: 0
        }
    },
    colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4','#2f7ed8', '#0d233a', '#8bbc21', '#910000', '#1aadce', 
   '#492970', '#f28f43', '#77a1e5', '#c42525', '#a6c96a','#4572A7', '#AA4643', '#89A54E', '#80699B', '#3D96AE', 
   '#DB843D', '#92A8CD', '#A47D7C', '#B5CA92','#7cb5ec', '#434348', '#90ed7d', '#f7a35c', '#8085e9', 
   '#f15c80', '#e4d354', '#2b908f', '#f45b5b', '#91e8e1'],

    <?php include "../funcoes/total_passaros_cadastrados.php"; ?>

    series: [{
        name: 'Ararajuba',
        data: [<?php echo $res_ararajuba['COUNT(*)'] ?>]

    }, {
        name: '<?php echo $res_arara_azul['especie'] ?>',
        data: [<?php echo $res_arara_azul['COUNT(*)'] ?>]

    }, {
        name: '<?php echo $res_arara_caninde['especie'] ?>',
        data: [<?php echo $res_arara_caninde['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_arara_vermelha['especie'] ?>',
        data: [<?php echo $res_arara_vermelha['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_arara_tricolor['especie'] ?>',
        data: [<?php echo $res_arara_tricolor['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_arara_severa['especie'] ?>',
        data: [<?php echo $res_arara_severa['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_arara_manilata['especie'] ?>',
        data: [<?php echo $res_arara_manilata['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_ararinha_maracana['especie'] ?>',
        data: [<?php echo $res_ararinha_maracana['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_ararinha_nobre['especie'] ?>',
        data: [<?php echo $res_ararinha_nobre['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_curica_cabeca_azul['especie'] ?>',
        data: [<?php echo $res_curica_cabeca_azul['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_jandaia_coquinho['especie'] ?>',
        data: [<?php echo $res_jandaia_coquinho['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_jandaia_mineira['especie'] ?>',
        data: [<?php echo $res_jandaia_mineira['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_jandaia_verdadeira['especie'] ?>',
        data: [<?php echo $res_jandaia_verdadeira['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_marianinha_cabeca_amarela['especie'] ?>',
        data: [<?php echo $res_marianinha_cabeca_amarela['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_marianinha_cabeca_preta['especie'] ?>',
        data: [<?php echo $res_marianinha_cabeca_preta['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_maitaca_verde['especie'] ?>',
        data: [<?php echo $res_maitaca_verde['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_papagaio_mangue['especie'] ?>',
        data: [<?php echo $res_papagaio_mangue['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_papagaio_chaua['especie'] ?>',
        data: [<?php echo $res_papagaio_chaua['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_papagaio_peito_roxo['especie'] ?>',
        data: [<?php echo $res_papagaio_peito_roxo['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_papagaio_galego['especie'] ?>',
        data: [<?php echo $res_papagaio_galego['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_papagaio_anaca['especie'] ?>',
        data: [<?php echo $res_papagaio_anaca['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_papagaio_verdadeiro['especie'] ?>',
        data: [<?php echo $res_papagaio_verdadeiro['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_papagaio_caatinga['especie'] ?>',
        data: [<?php echo $res_papagaio_caatinga['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_periquitao_maracana['especie'] ?>',
        data: [<?php echo $res_periquitao_maracana['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_principe_negro['especie'] ?>',
        data: [<?php echo $res_principe_negro['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_tiriba_barriga_vermelha['especie'] ?>',
        data: [<?php echo $res_tiriba_barriga_vermelha['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_tiriba_testa_vermelha['especie'] ?>',
        data: [<?php echo $res_tiriba_testa_vermelha['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_tucano_bico_verde['especie'] ?>',
        data: [<?php echo $res_papagaio_peito_roxo['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_tucano_bico_preto['especie'] ?>',
        data: [<?php echo $res_tucano_bico_preto['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_tucano_toco['especie'] ?>',
        data: [<?php echo $res_tucano_toco['COUNT(*)'] ?>]

    }]
});
    </script>
    <script type="text/javascript">
     Highcharts.chart('vendas', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total de Vendas'
    },
    subtitle: {
        text: 'Criatorio de Aves do Brasil'
    },
    xAxis: {
        categories: [
            'Total'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:5px; margin-right:5px;"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4','#2f7ed8', '#0d233a', '#8bbc21', '#910000', '#1aadce', 
   '#492970', '#f28f43', '#77a1e5', '#c42525', '#a6c96a','#4572A7', '#AA4643', '#89A54E', '#80699B', '#3D96AE', 
   '#DB843D', '#92A8CD', '#A47D7C', '#B5CA92','#7cb5ec', '#434348', '#90ed7d', '#f7a35c', '#8085e9', 
   '#f15c80', '#e4d354', '#2b908f', '#f45b5b', '#91e8e1'],

   <?php include "../funcoes/total_passaros_vendidos.php"; ?>

    series: [{
        name: '<?php echo $res_ararajuba['especie'] ?>',
        data: [<?php echo $res_ararajuba['COUNT(*)'] ?>]

    }, {
        name: '<?php echo $res_arara_azul['especie'] ?>',
        data: [<?php echo $res_arara_azul['COUNT(*)'] ?>]

    }, {
        name: '<?php echo $res_arara_caninde['especie'] ?>',
        data: [<?php echo $res_arara_caninde['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_arara_vermelha['especie'] ?>',
        data: [<?php echo $res_arara_vermelha['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_arara_tricolor['especie'] ?>',
        data: [<?php echo $res_arara_tricolor['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_arara_severa['especie'] ?>',
        data: [<?php echo $res_arara_severa['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_arara_manilata['especie'] ?>',
        data: [<?php echo $res_arara_manilata['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_ararinha_maracana['especie'] ?>',
        data: [<?php echo $res_ararinha_maracana['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_ararinha_nobre['especie'] ?>',
        data: [<?php echo $res_ararinha_nobre['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_curica_cabeca_azul['especie'] ?>',
        data: [<?php echo $res_curica_cabeca_azul['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_jandaia_coquinho['especie'] ?>',
        data: [<?php echo $res_jandaia_coquinho['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_jandaia_mineira['especie'] ?>',
        data: [<?php echo $res_jandaia_mineira['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_jandaia_verdadeira['especie'] ?>',
        data: [<?php echo $res_jandaia_verdadeira['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_marianinha_cabeca_amarela['especie'] ?>',
        data: [<?php echo $res_marianinha_cabeca_amarela['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_marianinha_cabeca_preta['especie'] ?>',
        data: [<?php echo $res_marianinha_cabeca_preta['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_maitaca_verde['especie'] ?>',
        data: [<?php echo $res_maitaca_verde['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_papagaio_mangue['especie'] ?>',
        data: [<?php echo $res_papagaio_mangue['COUNT(*)'] ?>]

    },{
        name: '<?php echo $res_papagaio_chaua['especie'] ?>',
        data: [<?php echo $res_papagaio_chaua['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_papagaio_peito_roxo['especie'] ?>',
        data: [<?php echo $res_papagaio_peito_roxo['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_papagaio_galego['especie'] ?>',
        data: [<?php echo $res_papagaio_galego['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_papagaio_anaca['especie'] ?>',
        data: [<?php echo $res_papagaio_anaca['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_papagaio_verdadeiro['especie'] ?>',
        data: [<?php echo $res_papagaio_verdadeiro['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_papagaio_caatinga['especie'] ?>',
        data: [<?php echo $res_papagaio_caatinga['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_periquitao_maracana['especie'] ?>',
        data: [<?php echo $res_periquitao_maracana['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_principe_negro['especie'] ?>',
        data: [<?php echo $res_principe_negro['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_tiriba_barriga_vermelha['especie'] ?>',
        data: [<?php echo $res_tiriba_barriga_vermelha['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_tiriba_testa_vermelha['especie'] ?>',
        data: [<?php echo $res_tiriba_testa_vermelha['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_tucano_bico_verde['especie'] ?>',
        data: [<?php echo $res_papagaio_peito_roxo['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_tucano_bico_preto['especie'] ?>',
        data: [<?php echo $res_tucano_bico_preto['COUNT(*)'] ?>]
    }, {
        name: '<?php echo $res_tucano_toco['especie'] ?>',
        data: [<?php echo $res_tucano_toco['COUNT(*)'] ?>]

    }]
});
    </script>
    <script type="text/javascript">
       Highcharts.chart('suprimentos', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total de Suprimentos em Estoque'
    },
    subtitle: {
        text: 'Criatorio de Aves do Brasil'
    },
    xAxis: {
        categories: [
            'Total'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:5px; margin-right:5px;"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4','#2f7ed8', '#0d233a', '#8bbc21', '#910000', '#1aadce', 
   '#492970', '#f28f43', '#77a1e5', '#c42525', '#a6c96a','#4572A7', '#AA4643', '#89A54E', '#80699B', '#3D96AE', 
   '#DB843D', '#92A8CD', '#A47D7C', '#B5CA92','#7cb5ec', '#434348', '#90ed7d', '#f7a35c', '#8085e9', 
   '#f15c80', '#e4d354', '#2b908f', '#f45b5b', '#91e8e1'],

   <?php include "../funcoes/total_suprimentos_cadastrados.php"; ?>
    series: [{
        name: 'Megazoo Extr Papagaios Reproducao 12KG',
        data: [<?php echo $row_papagaio_megazoo['qtde'] ?>]
    },{
        name: 'Megazoo Extr Araras 12KG',
        data: [<?php echo $row_arara_megazoo['qtde'] ?>]
    },{

        name: 'Nutropica Papagaio c/ Frutas 5KG',
        data: [<?php echo $row_papagaio_nutropica['qtde'] ?>]
    },{
        name: 'Nutropica Calopsita c/ Frutas 5KG',
        data: [<?php echo $row_calopsita_nutropica['qtde'] ?>]
    },{

        name: 'Nutropica Arara c/ Frutas 5KG',
        data: [<?php echo $row_arara_nutropica['qtde'] ?>]
    },{
        
        name: 'Nutropica Papinha Psitacideos Alta Energia 5KG',
        data: [<?php echo $row_papinha_nutropica['qtde'] ?>]
    },{
        
        name: 'Nutropica XMS Manutencao Psitacideos 5KG',
        data: [<?php echo $row_psitacideos_nutropica['qtde'] ?>]
    },{
        
        name: 'Nutropica Criador Manutencao Performance 10KG',
        data: [<?php echo $row_manutencao_nutropica['qtde'] ?>]
    },{
        
        name: 'Nutropica Tucano c/ Frutas 5KG',
        data: [<?php echo $row_tucano_nutropica['qtde'] ?>]
    },{
        
        name: 'Banana Prata DZ',
        data: [<?php echo $row_fruta_banana['qtde'] ?>]
    },{
        
        name: 'Goiaba Vermelha CX',
        data: [<?php echo $row_fruta_goiaba['qtde'] ?>]
    },{
        
        name: 'Laranja SC',
        data: [<?php echo $row_fruta_laranja_sc['qtde'] ?>]
    },{
        
        name: 'Laranja CX',
        data: [<?php echo $row_fruta_laranja_cx['qtde'] ?>]
    },{
        
        name: 'Maca Vermelha CX',
        data: [<?php echo $row_fruta_maca['qtde'] ?>]
    },{
        
        name: 'Mamao Formosa CX',
        data: [<?php echo $row_fruta_mamao['qtde'] ?>]
    },{
        
        name: 'Pimentao Verde CX',
        data: [<?php echo $row_fruta_pimentao['qtde'] ?>]

    }]
});
    </script>
    <?php include "../funcoes/total_gastos.php" ?>
    <script type="text/javascript">
        Highcharts.chart('total_gastos', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total de Gastos'
    },
    subtitle: {
        text: 'Criatorio de Aves do Brasil'
    },
    xAxis: {
        categories: ['Mês']
    },
    yAxis: {
        title: {
            text: 'Total R$'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Janeiro',
        data: [<?php echo $row_janeiro['Total'] ?>]
    },{
        name: 'Fevereiro',
        data: [<?php echo $row_fevereiro['Total'] ?>]
    },{
        name: 'Março',
        data: [<?php echo $row_marco['Total'] ?>]
    },{
        name: 'Abril',
        data: [<?php echo $row_abril['Total'] ?>]
    },{
        name: 'Maio',
        data: [<?php echo $row_maio['Total'] ?>]
    },{
        name: 'Junho',
        data: [<?php echo $row_junho['Total'] ?>]
    },{
        name: 'Julho',
        data: [<?php echo $row_julho['Total'] ?>]
    },{
        name: 'Agosto',
        data: [<?php echo $row_agosto['Total'] ?>]
    },{
        name: 'Setembro',
        data: [<?php echo $row_setembro['Total'] ?>]
    },{
        name: 'Outubro',
        data: [<?php echo $row_outubro['Total'] ?>]
    },{
        name: 'Novembro',
        data: [<?php echo $row_novembro['Total'] ?>]
    },{
        name: 'Dezembro',
        data: [<?php echo $row_dezembro['Total'] ?>]
    }]
});
    </script>
  </body>
</html>