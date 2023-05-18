<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: ../homedex.php');
	}
	if($_SESSION["tipologia"]=="utente"){
		header('location: pagina_cliente.php');
	}
	if($_SESSION["tipologia"]=="addetto"){
		header('location: pagina_adetto.php');
	}
?>

<html>
	<p>cazzo ci fai qui?</p>
</html>