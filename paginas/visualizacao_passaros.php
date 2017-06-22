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
      <form class="navbar-form navbar-left" action="buscar.php" method="get">
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
            <h2>Visualização Pássaros</h2>
          </div>
          <?php include "../funcoes/visualizacao_passaros.php"; ?>

          <div class="table-responsive">
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>CI</th>
                      <th>GEFAU</th>
                      <th>DT_NASCTO</th>
                      <th>ESPECIE</th>
                      <th>NOME CIENTÍFICO</th>
                      <th>SEXO</th>
                      <th>COLORACAO</th>
                      <th>PAI</th>
                      <th>MAE</th>
                      <th>ANILHA</th>
                      <th>MICROCHIP</th>
                      <th>DT_IDENT</th>
                      <th>NOME</th>
                      <th>NF</th>
                      <th>NOME_COMPRADOR</th>
                      <th>ENDEREÇO</th>
                      <th>BAIRRO</th>
                      <th>CEP</th>
                      <th>CIDADE</th>
                      <th>UF</th>
                      <th>CPF/CNPJ</th>
                      <th>IE/RG</th>
                      <th>TELEFONE</th>
                      <th>EMAIL</th>
                      <th>GTA</th>
                      <th>VALOR</th>
                      <th>ORIGEM</th>
                    </tr>
                  </thead>
                  <?php
                    $res = $mysqli->query($passaros_vendidos);
                    while($row = $res->fetch_assoc()){
                  ?>
                  <tbody class="vendido">
                      <tr>
                          <td><?php echo $row['ci'] ?></td>
                          <td><?php echo $row['gefau'] ?></td>
                          <td><?php echo $row['dt_nascto'] ?></td>
                          <td><?php echo $row['especie'] ?></td>
                          <td><?php echo $row['nome_cientifico'] ?></td>
                          <td><?php echo $row['sexo'] ?></td>
                          <td><?php echo $row['coloracao'] ?></td>
                          <td><?php echo $row['pai'] ?></td>
                          <td><?php echo $row['mae'] ?></td>
                          <td><?php echo $row['anilha'] ?></td>
                          <td><?php echo $row['microchip'] ?></td>
                          <td><?php echo $row['dt_ident'] ?></td>
                          <td><?php echo $row['nome'] ?></td>
                          <td><?php echo $row['nf'] ?></td>
                          <td><?php echo $row['nome_comprador'] ?></td>
                          <td><?php echo $row['endereco'] ?></td>
                          <td><?php echo $row['bairro'] ?></td>
                          <td><?php echo $row['cep'] ?></td>
                          <td><?php echo $row['cidade'] ?></td>
                          <td><?php echo $row['uf'] ?></td>
                          <td><?php echo $row['cpf'] ?></td>
                          <td><?php echo $row['rg'] ?></td>
                          <td><?php echo $row['telefone'] ?></td>
                          <td><?php echo $row['email'] ?></td>
                          <td><?php echo $row['gta'] ?></td>
                          <td><?php echo $row['valor'] ?></td>
                          <td><?php echo $row['origem'] ?></td>
                      </tr>

                  </tbody>
                  <?php  }?>

                  <?php
                    $res = $mysqli->query($passaros_estoque);
                    while($row2 = $res->fetch_assoc()){
                  ?>
                  <tbody class="estoque">
                      <tr>
                          <td><?php echo $row2['ci'] ?></td>
                          <td><?php echo $row2['gefau'] ?></td>
                          <td><?php echo $row2['dt_nascto'] ?></td>
                          <td><?php echo $row2['especie'] ?></td>
                          <td><?php echo $row2['nome_cientifico'] ?></td>
                          <td><?php echo $row2['sexo'] ?></td>
                          <td><?php echo $row2['coloracao'] ?></td>
                          <td><?php echo $row2['pai'] ?></td>
                          <td><?php echo $row2['mae'] ?></td>
                          <td><?php echo $row2['anilha'] ?></td>
                          <td><?php echo $row2['microchip'] ?></td>
                          <td><?php echo $row2['dt_ident'] ?></td>
                          <td><?php echo $row2['nome'] ?></td>
                          <td><?php echo $row2['nf'] ?></td>
                          <td><?php echo $row2['nome_comprador'] ?></td>
                          <td><?php echo $row2['endereco'] ?></td>
                          <td><?php echo $row2['bairro'] ?></td>
                          <td><?php echo $row2['cep'] ?></td>
                          <td><?php echo $row2['cidade'] ?></td>
                          <td><?php echo $row2['uf'] ?></td>
                          <td><?php echo $row2['cpf'] ?></td>
                          <td><?php echo $row2['rg'] ?></td>
                          <td><?php echo $row2['telefone'] ?></td>
                          <td><?php echo $row2['email'] ?></td>
                          <td><?php echo $row2['gta'] ?></td>
                          <td><?php echo $row2['valor'] ?></td>
                          <td><?php echo $row2['origem'] ?></td>
                          <td><a href="<?php echo "vender.php?ci=".$row2['ci']. "&gefau=" . $row2['gefau'] . "&dt_nascto=" . $row2['dt_nascto'] . "&especie=" . $row2['especie'] . "&nome_cientifico=" . $row2['nome_cientifico'] . "&sexo=" . $row2['sexo'] . "&coloracao=" . $row2['coloracao'] . "&pai=" . $row2['pai'] . "&mae=" . $row2['mae'] . "&anilha=" . $row2['anilha'] . "&microchip=" . $row2['microchip'] . "&dt_ident=" . $row2['dt_ident'] . "&nome=" . $row2['nome'] . "&nf=" . $row2['nf'] . "&nome_comprador=" . $row2['nome_comprador'] . "&endereco=" . $row2['endereco'] . "&bairro=" . $row2['bairro'] . "&cep=" . $row2['cep'] . "&cidade=" . $row2['cidade'] . "&uf=" . $row2['uf'] . "&cpf=" . $row2['cpf'] . "&rg=" . $row2['rg'] . "&telefone=" . $row2['telefone'] . "&email=" . $row2['email'] . "&gta=" . $row2['gta'] . "&valor=" . $row2['valor'] . "&origem=" . $row2['origem'] ?>"><span class=" glyphicon glyphicon-ok" title="Vender" style="color: black;"></span></a></td>
                      </tr>

                  </tbody>
                  <?php  }?>
              </table>
          </div>
          <div class="container-fluid">
              <div class="row legendas">
                  <div class="col-sm-12">
                      <h5>Legendas</h5>
                      <p class="bola_vendido"></p><p>Vendido</p>  <p class="bola_aguardando"></p><p>Aguardando</p>
                  </div>
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

  </body>
</html>