<?php
  require_once "headers/conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistema Criatório</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- Pagina de Login -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="main">
          <img src="imagens/logo.png" alt="Criatório de Aves do Brasil" title="Criatório de Aves do Brasil"><br>
          <form action="" method="post" class="login">
            <span class="glyphicon glyphicon-user"></span><input type="text" name="login" placeholder="Informe seu login" required><br>
            <span class="glyphicon glyphicon-lock"></span><input type="password" name="senha" placeholder="Informe sua senha" required><br>
            <button class="botao" name="btn" type="submit">Logar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
  include "headers/logon.php";
?>