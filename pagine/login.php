<?php
	session_start();
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
                </ul>
            </nav>
        </div>
    </header>

    <div class="titolologin">
    	<h1 class="travelfy_login">Travelfy Online - Login</h1>
    </div>

	<div class="container-testo">

		<div class="registrazione">
			<h3>non ti sei registrato?</h3>
			<p>registrati cliccando su questo tasto:</p>
			<table>
			<div><img class="foto_utente" src="../immagini/foto_utente.jpg"></div>
			<div class="tasto_registrazione"><button><a  href="registrazione.php">Registrazione</a></button></div>
			</table>
			
		</div>

		<div class="compilazione_login">
			<form  action = "<?php $_SERVER['PHP_SELF'] ?>" method="post">
				<div class="etabella">
					<table >
						<tr class="titolologin"><h2 class="pagina_login">Pagina di Login</h2></tr>
						<tr>
							<td class="virginia"> Username:</td>
						</tr>
						<tr>
							<td class="virginia"><input type="text" name="username" placeholder="inserisci nome utente...."value="<?php echo $username; ?>" required></td>
						</tr>
						<tr>
							<td class="virginia">Password:</td>
						</tr>
						<tr>
							<td class="virginia"><input type="password" name="password" placeholder="inserisci la password...." value="<?php /*echo $password; */?>" required></td>
						</tr>
						<tr>
							<td class="distaso">

									Utente <input type="radio" name="tipologia" value="cliente" checked>
									Addetto <input type="radio" name="tipologia" value="Addetto" checked>
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
		</div>

		<div class="sidebar">
			<ul>
				<li align="center" class="titolo-sidebar">Sidebar</li>
				<li><a href="alloggi.php" class="current-page">Accomodations</a></li>
                <li><a href="mete.php">Destinations</a></li>
                <li><a href="ristoranti.php">Restaurants</a></li>
                <li><a href="attivita.php">Activities</a></li>
			</ul>
		</div>

		
	</div>

		<?php
			if (isset($_POST["username"]) and isset($_POST["password"]) and isset($_POST["tipologia"])) 
			{
				$conn = new mysqli($db_servername,$db_username,$db_password,$db_name);
				if($conn->connect_error)
				{
					die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
				}

				$myquery = "SELECT username, password 
							FROM $tipologia 
							WHERE username='$username'
								AND password='$password' ";

				$ris = $conn->query($myquery) or die("<p>Query non riuscita! ".$conn->error."</p>");

				if($ris->num_rows == 0)
				{
					echo "<div style='color:red; font-size:3em' align='center'>Utente o password errati</div>";
					$conn->close();
				} 

				else 
				{
					echo "<p>Utente trovato</p>";

					$_SESSION["username"] = $username;
					$_SESSION["tipologia"] = $tipologia ;
											
					$conn->close();
					header("location: home.php");
				}

			}

		?>	
	
<footer class="piedatore">
	<?php 
		include('footer.php')
	?>
</footer>
</body>
</html>