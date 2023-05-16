<?php
	session_start();
	//echo session_id();

	// $db_servername = "localhost";
	// $db_name = "biblioteca";
	// $db_username = "root";
	// $db_password = "";
	require("../data/dati_connessione_db.php");
	if (isset($_POST["username"])) {$username = $_POST["username"];} else {$username = "";}
	if (isset($_POST["password"])) {$password = $_POST["password"];} else {$password = "";}
	if (isset($_POST["tipologia"])) {$tipologia = $_POST["tipologia"];} else {$tipologia = "";}

	
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Travelfy - login</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body class="colore">
    <header>
        <div class="mainnav">
            <div class>
                <img src="../immagini/logo_bianco.png" alt="travel" class="mainnav__logo" />
            </div>
            <nav>
                <ul>
                    <li><a href="../homedex.php">Homepage</a></li>
                    <li><a href="contatti.php">Contacts</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="registrazione.php">Registrazione</a></li>
                </ul>
            </nav>
        </div>
        <div class="firstnav">
            <nav>
                <ul>
                    <li><a href="alloggi.php" class="current-page">Accomodations</a></li>
                    <li><a href="mete.php">Destinations</a></li>
                    <li><a href="ristoranti.php">Restaurants</a></li>
                    <li><a href="attivita.php">Activities</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="titolologin">
    	<h1 class="travelfy_login">Travelfy Online - Login</h1>
    </div>
	<br>
	<br>
	<br>
	<div>
		<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
			<div class="etabella">
			<table class="tabella">
				<tr class="titolologin"><h2 align="center" class="pagina_login">Pagina di Login</h2></tr>
				<tr>
					<td class="virginia">Username: <input class="input" type="text" name="username" placeholder="inserisci nome utente...."value="<?php echo $username; ?>" required></td>
				</tr>
				<tr>
					<td class="virginia">Password: <input class="input" type="password" name="password" placeholder="inserisci la password...." value="<?php /*echo $password; */?>" required></td>
				</tr>
                <tr>
                    <td text-align="center" class="distaso">

                        	Utente <input type="radio" name="tipologia" value="utenti" checked>
                        	Addetto <input type="radio" name="tipologia" value="Addetto">

                    </td>
                </tr>
			</table>
			</div>   
			<div class="accedi">
				<p><input type="submit" value="Accedi"></p>
  			</div>
			<br>
			<br>
		</form>
		<?php
			if (isset($_POST["username"]) and isset($_POST["password"]) and isset($_POST["tipologia"])) {
				$conn = new mysqli($db_servername,$db_username,$db_password,$db_name);
				if($conn->connect_error){
					die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
				}

				$myquery = "SELECT username, password 
							FROM $tipologia 
							WHERE username='$username'
								AND password='$password'";

				$ris = $conn->query($myquery) or die("<p>Query fallita! ".$conn->error."</p>");

				if($ris->num_rows == 0){
					echo "<p>Utente non trovato o password errata</p>";
					$conn->close();
				} 
				else {
					echo "<p>Utente trovato</p>";

					$_SESSION["username"] = $username;
					$_SESSION["tipologia"] = $tipologia ;
											
					$conn->close();
					header("location: pagine/home.php");

			}
			}

		?>	
	</div>
<footer class="piedatore">
	<?php 
		include('footer.php')
	?>
</footer>
</body>
</html>