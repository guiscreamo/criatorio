<?php
  require_once "../headers/conexao.php";
  require"../headers/session.php";

  if(isset($_GET['botao'])){
      $busca = $_GET['buscar'];

      $busca_dividida = explode(' ',$busca);

      $quant = count($busca_dividida);

  for ($i=0; $i < $quant ; $i++) { 
        $pesquisa = $busca_dividida[$i];

  $sql = $mysqli->query("SELECT * FROM compras WHERE tipo LIKE '%$pesquisa%' OR nome LIKE '%$pesquisa%' OR dt_compra LIKE '%$pesquisa%' OR mes LIKE '%$pesquisa%'");
}
$mysqli->error;
$res_pesquisa = $sql->num_rows;
}

?>
<?php if($res_pesquisa == 0){ ?>

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
      <form class="navbar-form navbar-left" action="" method="get">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Pesquisa" name="buscar">
        </div>
        <button type="submit" class="btn btn-default" name="botao">Pesquisar</button>
      </form>
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



        <div class="site-overlay"></div>

        <div class="container-fluid">
          <button class="menu-btn">
            <span class="glyphicon glyphicon-align-justify"></span>
          </button>

          <div class="page-header">
            <h2>Resultados da Busca</h2>
          </div>

          <div class='alert alert-danger' style='position:absolute; top:200px; left:0; width:100%; text-align:center; font-size:20px;'>A sua busca não retornou nenhum resultado</div>

          <?php }else{ 

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
      <form class="navbar-form navbar-left" action="busca_compras.php" method="get">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Pesquisa" name="buscar">
        </div>
        <button type="submit" class="btn btn-default" name="botao">Pesquisar</button>
      </form>
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
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button id="first-link">Relatórios</button>
                        <ul>
                            <li class="pushy-link"><a href="relatorios/passaros.php">Pássaros</a></li>
                            <li class="pushy-link"><a href="relatorios/usuarios.php">Usuários</a></li>
                            <li class="pushy-link"><a href="relatorios/suprimentos.php">Suprimentos</a></li>
                            <li class="pushy-link"><a href="relatorios/vendas.php">Vendas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav> <!-- Fim MENU LATERAL -->



        <div class="site-overlay"></div>

        <div class="container-fluid">
          <button class="menu-btn">
            <span class="glyphicon glyphicon-align-justify"></span>
          </button>

          <div class="page-header">
            <h2>Resultados da Busca</h2>
          </div>

          <div class="table-responsive">
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>TIPO</th>
                      <th>NOME</th>
                      <th>DT_COMPRA</th>
                      <th>MES_COMPRA</th>
                      <th>VALOR</th>
                      <th>QUANTIDADE</th>
                      <th>TOTAL</th>
                    </tr>
                  </thead>
                  <?php
                    while($row = mysqli_fetch_assoc($sql)){

                  ?>
                  <tbody>
                      <tr>
                          <td><?php echo $row['tipo'] ?></td>
                          <td><?php echo $row['nome'] ?></td>
                          <td><?php echo $row['dt_compra'] ?></td>
                          <td><?php echo $row['mes'] ?></td>
                          <td><?php echo $row['valor'] ?></td>
                          <td><?php echo $row['qtde'] ?></td>
                          <td><?php echo $row['total'] ?></td>
                      </tr>

                  </tbody>
                  <?php  }?>
              </table>
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

  </body>
</html>
<?php }?>