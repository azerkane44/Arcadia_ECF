<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css" />

</head>

<body>

    <header>
        <div class="navbar">

            <div class="logo">
                <a href="acceuil.php">Arcadia</a>
            </div>
            <ul class="links">
                <li><a href="acceuil.php"> Acceuil</a></li>
                <li><a href="habitat.php">Habitat</a></li>
                <li><a href="service.php">Service </a></li>
                <li><a href="contact.php">Contact </a></li>

            </ul>
            <div class="buttons">
                <a href="inscription.php" class="action-button pro">Inscription</a>
                <a href="connexion.php" class="action-button">Se connecter</a>
                <div class="buttons-burger-menu">

                </div>
            </div>
            <div class="burger-menu-button">
                <a href="#"> <i class="fa-solid fa-bars"></i> </a>
            </div>
        </div>
        <div class="burger-menu ">
            <ul class="links">
                <li><a href="acceuil.php"> Acceuil</a></li>
                <li><a href="habitat.php">Habitat</a></li>
                <li><a href="service.php">Service </a></li>
                <li><a href="contact.php">Contact </a></li>
                <div class="divider"></div>
                <div class="buttons-burger-menu">
                    <a href="deco.php" class="action-button pro">Deconnexion</a>
                </div>
                <div class="buttons-burger-menu">
                    <a href="inscription.php" class="action-button pro">Inscription</a>
                    <a href="connexion.php" class="action-button">Se connecter</a>
                </div>
            </ul>
        </div>

    </header>
    <main>
        <div class="descarcadia">
            <div class="title">
                <hr class="ligne">
                <h1>Acrcadia Arcadia est un zoo situé en France près de la forêt de Brocéliande, en bretagne depuis 1960.</h1>
                <hr class="ligne">
                <div class="#">
                    <div class="MainImageContainer">
                        <img src="images/elephants-5661842_1280.jpg" id="mainimg" alt="image delephant" />
                    </div>
                </div>
            </div>
        </div>
        <h2 id="Titreservice">Liste des services</h2>
        <table border="1">
            <tr>
                <th>Nom</th>
                <th>Service</th>
            </tr>
            <tr>

                <td>Restauration</td>
                <td>Venez manger dans notre restaurant</td>

            </tr>
            <tr>
                <td>Visite</td>
                <td> Venez visiter nos habitats avec un guide gratuitement.</td>

            </tr>
            <tr>
                <td>Petit train</td>
                <td>Visiter notre zoo en petit train.</td>
            </tr>
        </table>

    </main>

    <div class="main-content">
        <!-- Contenu principal de ta page (comme ton tableau, etc.) -->
    </div>

    <footer>
        <div class="footer-content">
            <div class="opening-hours">
                <h3>Horaires d'ouverture</h3>
                <ul>
                    <li>Lundi - Vendredi : 09h00 - 18h00</li>
                    <li>Samedi : 10h00 - 19h00</li>
                    <li>Dimanche : 10h00 - 17h00</li>
                </ul>
            </div>

            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 Zoo en Ligne. Tous droits réservés. Développé par <span>Ton Nom</span>.</p>
        </div>
    </footer>


</body>

</html>