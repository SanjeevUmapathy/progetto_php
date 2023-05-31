<?php
    session_start();
    $username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Pagina_addetto</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<header>
        <div class="mainnav">
            <div class>
                <img src="../immagini/logo_bianco.png" alt="travel" class="mainnav__logo" />
            </div>
            <nav>
                <ul>
                    <li><a href="../homedex.php">Homepage</a></li>
                    <li><a href="contatti.php">Contacts</a></li>
					<li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
        <div class="firstnav">
            <nav>
                <ul>
                  
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="titolo"><h1 align="center">Pagina personale con i tuoi dati</h1></div>
        <div class="riga">
            <div></div>
            <div class="benvenuto">
                <h2>Benvenuto <?php echo $username ?></h2>
            </div>
        </div>

        <div class="gestione_dati">
            <div class="dati_pagina">
                <a href="ristoranti.php">ristoranti</a>
                <p>
                    clicca il link riportato sopra per essere indirizzato alla pagina dei ristoranti
                </p>
            </div>
            <div class="dati_pagina">
                <a href="attivita.php">attività</a>
                <p>
                    clicca il link riportato sopra per essere indirizzato alla pagina delle attività
                </p>
            </div>
            <div class="dati_pagina">
                <a href="dati_personali.php">i miei dati personali</a>
                <p>
                    clicca il link riportato sopra per essere indirizzato alla pagina dei dati personali
                </p>
            </div>
            <div class="dati_pagina">
                <a href="prenotazioni.php">prenotazioni</a>
                <p>
                    clicca il link riportato sopra per essere indirizzato alla pagina delle prenotazioni
                </p>
            </div>
        </div>
        
    </main>
</body>