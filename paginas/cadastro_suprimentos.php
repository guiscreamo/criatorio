<?php
  require_once "../headers/conexao.php";
  require_once "../headers/session.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php $today = date("F j, Y, g:i a");?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cadastro de Usuários</title>

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
            <li><a href="#">Mudar Senha</a></li>
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
</nav>

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
            <h2>Cadastro de Suprimentos</h2>
          </div>
        </div>

        <div class="container-fluid cad_passaros">

          <form action="" method="post">
            <div class="row">
              <div class="col-sm-2">
                <span>TIPO: </span>
                <select name="tipo" required>
                  <option>Racao</option>
                  <option>Frutas</option>
                </select>
              </div>
              <div class="col-sm-2">
                <span>NOME: </span>
                <select name="nome" required>
                  <option selected="selected">Selecione o Produto</option>
                  <optgroup label="Rações">
                  <option>Megazoo Extr Papagaios Reproducao 12KG</option>
                  <option>Megazoo Extr Araras 12KG</option>
                  <option>Nutropica Papagaio c/ Frutas 5KG</option>
                  <option>Nutropica Arara c/ Frutas 5KG</option>
                  <option>Nutropica Calopsita c/ Frutas 5KG</option>
                  <option>Nutropica Papinha Psitacideos Alta Energia 5KG</option>
                  <option>Nutropica XMS Manutencao Psitacideos 5KG</option>
                  <option>Nutropica Criador Manutencao Performance 10KG</option>
                  <option>Nutropica Tucano c/ Frutas 5KG</option>
                  </optgroup>
                  <optgroup label="Frutas">
                    <option>Banana Prata DZ</option>
                    <option>Goiaba Vermelha CX</option>
                    <option>Laranja SC</option>
                    <option>Laranja CX</option>
                    <option>Maca Vermelha CX</option>
                    <option>Mamao Formosa CX</option>
                    <option>Pimentao Verde CX</option>
                  </optgroup>
                </select>
              </div>
              <div class="col-sm-2">
                <span>DT.COMPRA: </span><input type="date" name="dt_compra" required>
              </div>
              <div class="col-sm-2">
                <span>MES DA COMPRA: </span>
                <select name="mes" required>
                  <option selected="selected">SELECIONE O MÊS</option>
                  <option>Janeiro</option>
                  <option>Fevereiro</option>
                  <option>Marco</option>
                  <option>Abril</option>
                  <option>Maio</option>
                  <option>Junho</option>
                  <option>Julho</option>
                  <option>Agosto</option>
                  <option>Setembro</option>
                  <option>Outubro</option>
                  <option>Novembro</option>
                  <option>Dezembro</option>
                </select>
              </div>
              <div class="col-sm-1">
                <span>VALOR: </span><input type="text" name="valor" id="valor" required>
              </div>
              <div class="col-sm-1">
                <span>QTDE: </span><input type="number" id="qtde" name="qtde_compra" required min="0" max="1000" value="0">
              </div>
              <div class="col-sm-2">
                <span>TOTAL: </span><input type="text" name="total" id="total" required>
              </div>
            </div>
              <div class="row div_botao">
                <input type="submit" name="btn_cad_suprimentos" class="botao_suprimentos" value="Cadastrar">
              </div>
          </form>

        </div><!-- ./Div Container -->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="../js/jquery.priceformat.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/pushy.min.js"></script>
                      <script type="text/javascript">
                      $(document).ready(function() {

                       $("#qtde").change(function() {
                         var qtd = $(this).val();
                         var valor = $("#valor").val();
                         var calculo = qtd * valor;
                         $("#total").val(calculo).priceFormat({
                          prefix: 'R$',
                          thousandsSeparator: '',
                          clearOnEmpty: true
                         });
                       });
                      });
                  </script>
  </body>
</html>
<?php
  include "../headers/cad_suprimentos.php";
?>