<?php
  if (isset($_POST['btn'])) {
      $login = $_POST['login'];
      $senha = md5($_POST['senha']);

      $verifica = mysqli_num_rows($mysqli->query
      ("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' "));

      if($verifica == 1){
        session_start();
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['senha'] = $_POST['senha'];

        echo "<div class='alert alert-success' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'>Bem Vindo!</div>";
        echo "<meta http-equiv=Refresh content=2;url=paginas/dashboard.php>";
      }
      else{
        echo "<div class='alert alert-danger' style='position:absolute; top: 0; width: 100%; font-family: verdana,arial; font-size: 20px; text-align: center;'>Desculpe, mas verifique o login e/ou senha e tente novamente</div>";
        echo "<meta http-equiv=Refresh content=2;url=index.php>";
      }
  }
?>