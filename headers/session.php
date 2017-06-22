<?php

if(!isset($_SESSION)) session_start();

if(isset($_SESSION['login'])){


}else{

	echo "<script>alert('Voce deve se logar primeiro!')</script>";
	echo "<meta http-equiv=Refresh content=0;url=../index.php>";

}

?>