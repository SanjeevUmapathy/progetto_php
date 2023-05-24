<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../homedex.php');
	}
	if($_SESSION["tipologia"]=="cliente"){
		header('location: pagina_cliente.php');
	}

	if($_SESSION["tipologia"]=="addetto"){
		header('location: pagina_addetto.php');
	}
?>

<html>
	<p>ciao</p>
</html>