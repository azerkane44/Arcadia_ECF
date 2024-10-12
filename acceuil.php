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
                <li><a href="services.php">Service </a></li>
                <li><a href="formcontact.php">Contact </a></li>

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
                <li><a href="">Contact </a></li>
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

    <!-- Description d'ARCADIA-->
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
        <div class="desczoo">
            <h2>La santé et l'écologie chez Arcadia</h2>
            <div class="molette">

                <img src="images/eco-5465432_640.png" id="imageecologie" alt="#" />
                <p>La santé chez Arcadia fait parti intégrante de nos préocupations, Chaque jour, plusieurs vétérinaires viennent afin
                    d’effectuer les contrôles sur chaque animal avant l’ouverture du zoo afin de s’assurer que tout
                    se passe bien, de même, toute la nourriture donnée est calculée afin d’avoir le bon grammage pour chaque animal.</p>
            </div>
            <div class="wraper">
                <div id="blocimg1">
                    <img src="images/leopards-1994499_1280.jpg" alt="image du zoo" id="imgzoo1">
                </div>
                <div id="blocimg2">
                    <img src="images/panda-4421395_1280.jpg" alt="image de zoo" id="imgzoo2">
                </div>
                <div id="blocimg3">
                    <img src="images/penguin-6905568_1280.jpg" alt="image de zoo" id="imgzoo3">
                </div>
                <div id="blocimg4">
                    <img src="images/monkey-4164889_1280.jpg" alt="image de zoo" id="imgzoo4">
                </div>
                <div id="blocimg5">
                    <img src="images/animal-4458133_1280.jpg" alt="image de zoo" id="imgzoo5">
                </div>
            </div>

            <div class="service">
                <h2 id="prestation">Prestation</h2>
                <div class="molette">
                    <img src="images/resto.png" alt="#" />
                    <p>Venez vous déléctez dans notre restaurant à petit prix.</p>
                </div>
                <div class="molette">
                    <img src="images/habitat.png" alt="#" />
                    <p>Venez visitez nos différents habitats avec un guide gratuitement.</p>
                </div>
                <div class="molette">
                    <img src="images/train.png" alt="#" />
                    <p class="sizepara">Venez visiter notre zoo de manière atypique avec notre petit train. </p>
                </div>
            </div>
            <!-- Voiture d'exposition-->
            <div class="ExpoVoiture" id="col-1">
                <img src="images/nature.jpg" alt="#" />
                <div class="information">
                    <h3>Nos différents habitats</h3>
                    <p>Forêt tropical</p>
                    <p>Savane</p>
                    <p>Marais/milieu aquatique</p>
                    <p>Grotte</p>
                    <p>Prairies</p>
                    <p>Plaines</p>

                </div>
            </div>

            <div class="ExpoVoiture" id="col-2">
                <img src="images/lion-4399437_1280.jpg" alt="#" />
                <div class="information">
                    <h3>Nos animaux</h3>
                    <p>Félins : Tigre, Lion, Léopard, </p>
                    <p>Primates: Gorille, Chimpanzé, Ouistiti Argenté </p>
                    <p>Eléphants, Eléphants de Bornéo, Eléphants de savane d'Afrique</p>
                    <p>Ours, Ours Polaire, Ours brun, Ours noir d'Asie</p>
                    <p>Oiseaux : Perroquet, Grande pie, Paon bleu, </p>

                </div>
            </div>
            <!-- aVIS CLIENT-->
            <h2>Nos Avis</h2>
            <figure class="snip1533">

                <figcaption>
                    <blockquote>
                        <p>If you do the job badly enough, sometimes you don't get asked to do it again.</p>
                    </blockquote>
                    <h3>Wisteria Ravenclaw</h3>
                    <h4>Google Inc.</h4>
                </figcaption>
            </figure>
            <figure class="snip1533">
                <figcaption>
                    <blockquote>
                        <p>I'm killing time while I wait for life to shower me with meaning and happiness.</p>
                    </blockquote>
                    <h3>Ursula Gurnmeister</h3>
                    <h4>Facebook</h4>
                </figcaption>
            </figure>
            <figure class="snip1533">
                <figcaption>
                    <blockquote>
                        <p>The only skills I have the patience to learn are those that have no real. </p>
                    </blockquote>
                    <h3>Ingredia Nutrisha</h3>
                    <h4>Twitter</h4>
                </figcaption>
            </figure>


        </div>
    </main>
    <!-- Footer avec horaires garage-->
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

    <script src="script.js"></script>
</body>

</html>