<?php
	require "../headers/conexao.php";
	require"../headers/session.php";

	$id = filter_input(INPUT_GET, "id");
	$tipo = filter_input(INPUT_GET, "tipo");
	$nome = filter_input(INPUT_GET, "nome");
	$dt_compra = filter_input(INPUT_GET, "dt_compra");
	$mes_compra = filter_input(INPUT_GET, "mes");
	$valor = filter_input(INPUT_GET, "valor");
	$qtde = filter_input(INPUT_GET, "qtde");
  $login = $_SESSION['login'];
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
      <a class="navbar-brand" href="../paginas/dashboard.php"><img src="../imagens/logo.png" alt="Criatorio de Aves do Brasil" id="logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="menu">
      <ul class="nav navbar-nav">
        
      </ul>
      <form class="navbar-form navbar-left" action="busca_suprimentos.php" method="get">
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
                            <li class="pushy-link"><a href="../paginas/cadastro_passaros.php">Pássaros</a></li>
                            <li class="pushy-link"><a href="../paginas/cadastro_usuarios.php">Usuários</a></li>
                            <li class="pushy-link"><a href="../paginas/cadastro_suprimentos.php">Suprimentos</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button id="first-link">Visualização</button>
                        <ul>
                            <li class="pushy-link"><a href="../paginas/visualizacao_passaros.php">Pássaros</a></li>
                            <li class="pushy-link"><a href="../paginas/visualizacao_usuarios.php">Usuários</a></li>
                            <li class="pushy-link"><a href="../paginas/visualizacao_suprimentos.php">Suprimentos</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu">
                        <button id="first-link">Relatórios</button>
                        <ul>
                            <li class="pushy-link"><a href="../paginas/relatorios/passaros.php">Pássaros</a></li>
                            <li class="pushy-link"><a href="../paginas/relatorios/usuarios.php">Usuários</a></li>
                            <li class="pushy-link"><a href="../paginas/relatorios/suprimentos.php">Suprimentos</a></li>
                            <li class="pushy-link"><a href="../paginas/relatorios/vendas.php">Vendas</a></li>
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
            <h2>Adicionar Suprimentos</h2>
          </div>

        </div>
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-sm-12">
        			<form action="" method="GET" class="adicionar">
        				<input type="hidden" name="id" value="<?php echo $id ?>">
        				<input type="hidden" name="qtde" value="<?php echo $qtde ?>">
                <input type="hidden" name="nome" value="<?php echo $nome ?>">
                <span>DT.RETIRADA: </span><br><input type="date" name="dt_retirada" required><br>
                <span>RETIRADO POR: </span><br><input type="text" name="retirado_por" readonly  value="<?php echo $login ?>"><br>
        				<span>QUANTIDADE: </span><br><input type="number" name="quantidade" required><br>
        				<button type="submit" name="retirar" class="btn btn-default">Retirar</button>
        			</form>
        		</div>
        	</div>
        </div>




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
<?php
	if(isset($_GET['retirar'])){
		$id = filter_input(INPUT_GET, "id");
    $nome = filter_input(INPUT_GET, "nome");
		$quantidade_anterior = $_GET['qtde'];
		$quantidade = $_GET['quantidade'];
    $dt_retirada = $_GET['dt_retirada'];
    $retirado_por = $_GET['retirado_por'];

		$res = $quantidade_anterior - $quantidade;

		$altera = $mysqli->query("UPDATE estoque_suprimento SET qtde = '$res' WHERE id = '$id'");

		if($altera){
			echo "<div class='alert alert-success' style='position:absolute; top:0; left:0; width:100%; text-align:center; font-size:20px;'>O suprimento foi atualizado com sucesso!</strong></div>";
            echo "<meta http-equiv=Refresh content=1;url=../paginas/visualizacao_suprimentos.php>";
        $mysqli->query("INSERT INTO retirados (nome,qtde,dt_retirada,retirado_por) VALUES($nome','$quantidade','$dt_retirada','$retirado_por')");
		}
		else{
			 echo "<div class='alert alert-danger' style='position:absolute; top:0; left:0; width:100%; text-align:center; font-size:20px;'>Ocorreu um erro ao atualizar o produto, por favor tente mais tarde!</strong></div>";
            echo "<meta http-equiv=Refresh content=1;url=../paginas/visualizacao_suprimentos.php>";
		}
    
  }
    
?>