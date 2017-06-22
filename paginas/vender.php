<?php
  require_once "../headers/conexao.php";
  require_once "../headers/session.php";

  $ci = filter_input(INPUT_GET, "ci");
  $gefau = filter_input(INPUT_GET, "gefau");
  $dt_nascto = filter_input(INPUT_GET, "dt_nascto");
  $especie = filter_input(INPUT_GET, "especie");
  $nome_cientifico = filter_input(INPUT_GET, "nome_cientifico");
  $sexo = filter_input(INPUT_GET, "sexo");
  $coloracao = filter_input(INPUT_GET, "coloracao");
  $pai = filter_input(INPUT_GET, "pai");
  $mae = filter_input(INPUT_GET, "mae");
  $anilha = filter_input(INPUT_GET, "anilha");
  $microchip = filter_input(INPUT_GET, "microchip");
  $dt_ident = filter_input(INPUT_GET, "dt_ident");
  $nome = filter_input(INPUT_GET, "nome");
  $nf = filter_input(INPUT_GET, "nf");
  $nome_comprador = filter_input(INPUT_GET, "nome_comprador");
  $endereco = filter_input(INPUT_GET, "endereco");
  $bairro = filter_input(INPUT_GET, "bairro");
  $cep = filter_input(INPUT_GET, "cep");
  $cidade = filter_input(INPUT_GET, "cidade");
  $cpf = filter_input(INPUT_GET, "cpf");
  $rg = filter_input(INPUT_GET, "rg");
  $telefone = filter_input(INPUT_GET, "telefone");
  $email = filter_input(INPUT_GET, "email");
  $gta = filter_input(INPUT_GET, "gta");
  $valor = filter_input(INPUT_GET, "valor");
  $origem = filter_input(INPUT_GET, "origem");
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
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Pesquisa">
        </div>
        <button type="submit" class="btn btn-default">Pesquisar</button>
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
            <h2>Venda de Pássaros</h2>
          </div>
        </div>

        <div class="container-fluid cad_passaros">

          <form action="" method="GET">
            <div class="row">
              <div class="col-sm-1">
                <span>GEFAU: </span><input type="text" readonly name="gefau" value="<?php echo $gefau ?>">
              </div>
              <div class="col-sm-2">
                <span>DT.NASCTO: </span><input type="text" name="dt_nascto" readonly value="<?php echo $dt_nascto ?>">
              </div>
              <div class="col-sm-2">
                <span>ESPÉCIE: </span><input type="text" name="especie" readonly value="<?php echo $especie ?>">
              </div>
              <div class="col-sm-2">
                <span>NOME CIENTÍFICO: </span><input type="text" name="nome_cientifico" readonly value="<?php echo $nome_cientifico ?>">
              </div>
              <div class="col-sm-1">
                <span>SEXO: </span><input type="text" name="sexo" readonly value="<?php echo $sexo ?>">
              </div>
              <div class="col-sm-1">
                <span>COLORACAO: </span><input type="text" name="coloracao" readonly value="<?php echo $coloracao ?>">
              </div>
              <div class="col-sm-1">
                <span>PAI: </span><input type="text" name="pai" readonly value="<?php echo $pai ?>">
              </div>
              <div class="col-sm-1">
                <span>MÃE: </span><input type="text" name="mae" readonly value="<?php echo $mae ?>">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-1">
                <span>ANILHA: </span><input type="text" name="anilha" readonly value="<?php echo $anilha ?>">
              </div>
              <div class="col-sm-2">
                <span>MICROCHIP: </span><input type="text" name="microchip" readonly value="<?php echo $microchip ?>">
              </div>
              <div class="col-sm-2">
                <span>DT.IDENT: </span><input type="text" name="dt_ident" readonly value="<?php echo $dt_ident ?>">
              </div>
              <div class="col-sm-2">
                <span>NOME: </span><input type="text" name="nome" readonly value="<?php echo $nome ?>">
              </div>
              <div class="col-sm-1">
                <span>NF: </span><input type="text" name="nf" readonly value="<?php echo $nf ?>">
              </div>
              <div class="col-sm-2">
                <span>NOME COMPRADOR: </span><input type="text" name="nome_comprador" required>
              </div>
              <div class="col-sm-2">
                <span>ENDEREÇO: </span><input type="text" name="endereco" required>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
                <span>BAIRRO: </span><input type="text" name="bairro" required>
              </div>
              <div class="col-sm-2">
                <span>CEP: </span><input type="text" name="cep" required>
              </div>
              <div class="col-sm-2">
                <span>CIDADE: </span><input type="text" name="cidade" required>
              </div>
              <div class="col-sm-1">
                <span>UF: </span><input type="text" name="uf" required>
              </div>
              <div class="col-sm-2">
                <span>CNPJ/CPF: </span><input type="text" name="cpf" required>
              </div>
              <div class="col-sm-2">
                <span>IE/RG: </span><input type="text" name="rg" required>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2">
                <span>TELEFONE: </span><input type="phone" name="telefone" required>
              </div>
              <div class="col-sm-4">
                <span>EMAIL: </span><input type="email" name="email" required>
              </div>
              <div class="col-sm-1">
                <span>GTA/AT: </span><input type="text" name="gta" required>
              </div>
              <div class="col-sm-1">
                <span>VALOR: </span><input type="text" name="valor" required>
              </div>
              <div class="col-sm-2">
                <span>ORIGEM: </span><input type="text" name="origem" required>
              </div>
            </div>
            <div class="row div_botao">
              <input type="submit" name="btn_venda_passaros" class="botao" value="Cadastrar Venda">
            </div>
          </form>

        </div><!-- ./Div Container -->
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/pushy.min.js"></script>
    </script>
  </body>
</html>
<?php
  include "../funcoes/funcao_vender.php";
?>