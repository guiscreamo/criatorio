<?php
  require_once "../headers/conexao.php";
  require"../headers/session.php";

  $id = filter_input(INPUT_GET, "id");
  $nome = filter_input(INPUT_GET, "nome");
  $telefone = filter_input(INPUT_GET, "telefone");
  $email = filter_input(INPUT_GET, "email");
  $login = filter_input(INPUT_GET, "login");
  $senha = filter_input(INPUT_GET, "senha");

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php $today = date("F j, Y, g:i a");?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Area Administrativa | Trocar Senha</title>

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
            <h2>Trocar Senha </h2>
          </div>

        </div><!-- ./ Cointainer -->

        <div class="container-fluid troca">
          <div class="row">
            <div class="col-sm-12">
              <form action="" method="post">
                <span>SENHA ANTIGA: </span><br>
                <input type="password" name="senha_antiga"><br>
                <span>NOVA SENHA: </span><br>
                <input type="password" name="senha_nova"><br>
                <button type="submit" class="btn btn-default" name="btn_trocar_senha">Mudar Senha</button>
              </form>
            </div>
          </div>
        </div>

        <?php
      if(isset($_POST['btn_trocar_senha'])){
        $senha_atual = md5($_POST['senha_antiga']);
        $nova_senha = md5($_POST['senha_nova']);
        $login = $_SESSION['login'];

        $sql = $mysqli->query("SELECT senha FROM usuarios WHERE login = '$login'");
        $row = mysqli_fetch_array($sql);
        $senha_banco = $row['senha'];

        if($senha_atual != $senha_banco){
          echo "<div class='alert alert-danger' style='position:absolute; top: 0px; width:100%; text-align:center; font-size:20px;'>A senha atual não confere com o banco de dados, favor verificar e tentar novamente!</div>";
          echo "<meta http-equiv=Refresh content=2;url=alterar_senha.php>";
        }else{
          $altera = $mysqli->query("UPDATE usuarios SET senha = '$nova_senha' WHERE login = '$login'");
          echo "<div class='alert alert-success' style='position:absolute; top: 0px; width:100%; text-align:center; font-size:20px;'>A sua senha foi alterada com sucesso!</div>";
            echo "<meta http-equiv=Refresh content=2;url=dashboard.php>";
        }

    }
      ?>

    

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