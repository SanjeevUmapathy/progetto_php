<!DOCTYPE html>
<html>

<head>
    <title>Mete</title>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="icon" href="../immagini/Travelfy.ico" type="image/x-icon"/>
</head>

<body>

    <header>
        <div class="mainnav">
            <div>
                <img src="../immagini/logo_bianco.png" alt="travel" class="mainnav__logo" />
            </div>
            <nav>
                <ul>
                    <li><a href="../homedex.php">Homepage</a></li>
                    <li><a href="../pagine/contatti.php">Contacts</a></li>
                    <li><a href="login.php">Login</a></li>
					<li><a href="registrazione.php">Registrazione</a></li>
                </ul>
            </nav>
        </div>

        <div class="firstnav">
            <nav>
                <ul>
                    <li><a href="../pagine/alloggi.php" class="current-page">Accomodations</a></li>
                    <li><a href="../pagine/mete.php">Destinations</a></li>
                    <li><a href="../pagine/ristoranti.php">Restaurants</a></li>
                    <li><a href="../pagine/attivita.php">Activities</a></li>
                    <li>
                        <input type="text" placeholder="Choose your destination....">
                        <button>&#x1F50D</button>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">

        <h1 align="center"> TOP 4 DESTINATIONS OF 2023 </h1>
        <main>

            <div class="container__activities__cols">
                <div>
                    <img src="../immagini/destination4.webp" alt="Immagine 1">
                    <h3>Santorini, Greece</h3>
                </div>
                <div>
                    <p>Santorini is a Greek island in the Aegean Sea known for its striking beauty, picturesque villages, and stunning sunsets. 
                        The island is renowned for its whitewashed buildings, blue domed churches, and dramatic cliffs overlooking the sea. 
                        Santorini is also famous for its volcanic beaches, hot springs, and delicious local cuisine. Visitors can explore the island's 
                        rich history and culture by visiting ancient ruins, museums, and art galleries.  For now it our best option.</p>
                </div>

            </div>

            <div class="container__activities__cols">
                <div>
                    <img src="../immagini/destination2.jpg" alt="Immagine 2">
                    <h3>Bali, Indonesia</h3>
                </div>
                <div>
                    <p>Bali is an Indonesian island known for its beautiful beaches, lush tropical forests, 
                        and vibrant culture. It's a popular tourist destination that attracts millions of visitors each year, 
                        with its stunning landscapes, ancient temples, and traditional Balinese architecture. Bali is also famous 
                        for its art, music, dance, and cuisine, which are deeply influenced by Hinduism and Balinese customs. 
                        Visitors to Bali can enjoy a wide range of activities, including surfing, diving, hiking.</p>
                </div>
            </div>

            <div class="container__activities__cols">
                <div>
                    <img src="../immagini/destination3.webp" alt="Immagine 3">
                    <h3>Istanbul, Turkey</h3>
                </div>
                <div>
                    <p>Istanbul is a vibrant and historic city located in Turkey, straddling the continents of Europe and Asia. 
                        It has a rich and diverse cultural heritage, shaped by its history as a center of trade and civilization 
                        for over two thousand years. Visitors to Istanbul can explore its many stunning landmarks, such as the Hagia Sophia, 
                        Topkapi Palace, and the Blue Mosque, which reflect its unique blend of Ottoman, Byzantine, and Roman influences. 
                        Very authentic and marvellous city.</p>
                </div>
            </div>

            <div class="container__activities__cols">
                <div>
                    <img src="../immagini/destination1.avif" alt="Immagine 4">
                    <h3>Rome, Italy</h3>
                </div>
                <div>
                    <p>Rome is a historic and iconic city located in central Italy, known for its rich history, 
                        stunning architecture, and delicious food. As the capital of the Roman Empire, Rome is home to many famous landmarks,
                        including the Colosseum, the Roman Forum, and the Pantheon, which attract millions of visitors each year. 
                        The city is also home to the Vatican City, the center of the Catholic Church and home to St. Peter's Basilica,
                        the Sistine Chapel, and other famous artworks.</p>
                </div>
            </div>
        </main>


    </div>



    <aside>

    </aside>

    <footer>
        <hr>
        <hr>
        <div class="container">
            <div class="footer__row">

                <div class="footer__col">
                    <h3>About Us</h3>
                    <p>We are a travel agency that specializes in creating unforgettable experiences for our clients.
                        Whether you're looking for a relaxing beach getaway or an action-packed adventure, we've got you
                        covered.</p>
                </div>

                <div class="footer__col">
                    <h3>Explore</h3>
                    <ul>
                        <li><a href="../pagine/alloggi.html" class="current-page">Accomodations</a></li>
                        <li><a href="../pagine/mete.html">Destinations</a></li>
                        <li><a href="../pagine/ristoranti.html">Restaurants</a></li>
                        <li><a href="../pagine/attivita.html">Activities</a></li>
                    </ul>
                </div>

                <div class="footer__col">
                    <h3>Contact Us</h3>
                    <p>Via Marco Antonio 36</p>
                    <p>Monza, Italy 20900</p>
                    <p>info@Travelfy.com</p>
                    <p>
                    <div class="footer__row__sociallist">
                        <ul>
                            <li><a href="#"><i class="fab fa-viber"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-messenger"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                        </ul>
                    </div>
                    </p>
                </div>

            </div>

            <div class="footer__low">
                <h6></h6><small>&copy; Copyright 2023, TravelFy</small></h6>
            </div>
        </div>


    </footer>

</body>

</html>