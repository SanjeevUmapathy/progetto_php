<?php 
    require("../data/dati_connessione_db.php");
    if(isset($_POST["username"])) 
    $username = $_POST["username"];  else $username = "";
    if(isset($_POST["password"])) $password = $_POST["password"];  else $password = "";
    if(isset($_POST["conferma"])) $conferma = $_POST["conferma"];  else $conferma = "";
    if(isset($_POST["nome"])) $nome = $_POST["nome"];  else $nome = "";
    if(isset($_POST["cognome"])) $cognome = $_POST["cognome"];  else $cognome = "";
    if(isset($_POST["email"])) $email = $_POST["email"];  else $email = "";
    if(isset($_POST["telefono"])) $telefono = $_POST["telefono"];  else $telefono = "";
    if(isset($_POST["comune"])) $comune = $_POST["comune"];  else $comune = "";
    if(isset($_POST["indirizzo"])) $indirizzo = $_POST["indirizzo"];  else $indirizzo = "";
    if(isset($_POST["tipologia"])) $tipologia = $_POST["tipologia"];  else $tipologia = "utenti";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
    <title>Travelfy - Registrazione</title>
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
                    <li><a href="pagine/contatti.php">Contacts</a></li>
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
    <div class="contenuto">
		<div class="titolologin">
			<h1 class="travelfy_login">Travelfy Online - Registrazione</h1>
		</div>
		<br>
        
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<br>
		<br>
		<div class="etabella">
			<table class="tabella">
					<tr class="titolologin"><h2 align="center" class="pagina_login">Pagina di Registrazione</h2></tr>
					<tr>
						<td class="virginia">Username: <input class="input" type="text" name="username" placeholder="inserisci nome utente...."value="<?php echo $username; ?>" required></td>
					</tr>
					<tr>
						<td class="virginia">Password: <input class="input" type="password" name="password" placeholder="inserisci la password...." value="<?php /*echo $password; */?>" required></td>
					</tr>
					<tr>
						<td class="virginia">Conferma pwd: <input class="input" type="password" name="password" placeholder="Conferma password...." value="<?php /*echo $password; */?>" required></td>
					</tr>
					<tr>
						<td class="virginia">Nome: <input class="input" type="text" name="password" placeholder="inserisci il nome...." value="<?php /*echo $password; */?>" required></td>
					</tr>
					<tr>
						<td class="virginia">Cognome: <input class="input" type="text" name="password" placeholder="inserisci il cognome...." value="<?php /*echo $password; */?>" required></td>
					</tr>
					<tr>
						<td class="virginia">Email: <input class="input" type="text" name="password" placeholder="inserisci l'email...." value="<?php /*echo $password; */?>" required></td>
					</tr>
					<tr>
						<td class="virginia">Contatto telephonico: <input class="input" type="text" name="password" placeholder="inserici il numero di telefono...." value="<?php /*echo $password; */?>" required></td>
					</tr>
					<tr>
						<td class="virginia">Comune di residenza: <input class="input" type="text" name="password" placeholder="inserisci il comune...." value="<?php /*echo $password; */?>" required></td>
					</tr>
					<tr>
						<td class="virginia">Indirizzo: <input class="input" type="text" name="password" placeholder="inserisci l'indirizzo di residenza...." value="<?php /*echo $password; */?>" required></td>
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
            <p>
                <input type="submit" value="Accedi">
            </p>
			</div>
			<br>
        </form>

        <p>
            <?php
            if(isset($_POST["username"]) and isset($_POST["password"]))
             {
                if ($_POST["username"] == "" or $_POST["password"] == "") 
                {
                     echo "username e password non possono essere vuoti!";
                } 

                elseif ($_POST["password"] != $_POST["conferma"])
                {
                    echo "Le password inserite non corrispondono
                    <br>
                    <br>";
                } 

                else 
                {
                    $conn = new mysqli($db_servername,$db_username,$db_password,$db_name);
                    if($conn->connect_error)
                    {
                        die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
                    }

                    $myquery = "SELECT username 
						    FROM utenti 
						    WHERE username='$username'";
                    //echo $myquery;

                    $ris = $conn->query($myquery) or die("<p>Query fallita!</p>");
                    if ($ris->num_rows > 0) {
                        echo "Questo username è già stato usato";
                    } else {

                        $myquery = "INSERT INTO $tipologia (username, password, nome, cognome, email, telefono, comune, indirizzo)
                                    VALUES ('$username', '$password', '$nome', '$cognome','$email','$telefono','$comune','$indirizzo')";

                        /*
                        // Versione con l'uso dell'hash
                        $password_hash = password_hash($password, PASSWORD_DEFAULT);

                        $myquery = "INSERT INTO utenti (username, password, nome, cognome, email, telefono, comune, indirizzo)
                                    VALUES ('$username', '$password_hash', '$nome', '$cognome','$email','$telefono','$comune','$indirizzo')";
                        */

                        if ($conn->query($myquery) === true) {
                            session_start();
                            $_SESSION["username"]=$username;
                            $_SESSION["tipologia"]=$_POST["tipologia"];
                            
						    $conn->close();

                            echo "Registrazione effettuata con successo!<br>sarai ridirezionato alla home tra 5 secondi.";
                            header('Refresh: 5; URL=home.php');

                        } else {
                            echo "Non è stato possibile effettuare la registrazione per il seguente motivo: " . $conn->error;
                        }
                    }
                }
            }
            ?>
        </p>
    </div>
    <?php 
        error_reporting(E_ALL ^ E_WARNING); // metodo globale ^ significa tranne e funziona da qui in poi
		include('footer.php');
		// @include('footerrr.php');  // con @ evito la generazione di warnings o errors da parte della funzione
	?>

<footer class="piedatore">
	<?php 
		include('footer.php')
	?>
</footer>
</body>

</html>