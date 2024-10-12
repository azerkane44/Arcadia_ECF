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

    <!-- Service du garage-->
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

        <div>
            <h5 id="titredeshabitats">Habitats du zoo</h5>
            <hr id="lignehabitat">
        </div>

        <div class="Expohabitat" id="habitat-jungle">
            <h5 class="titrehabitat" id="titre-habitat-jungle">Jungle</h5>
            <div class="slider">
                <div class="slide active">
                    <img src="images/Imagehabitatjungle.jpg" alt="#" class="habitat-image" data-habitat="habitat-jungle" />
                </div>
                <div class="slide">
                    <img src="images/tiger-1822537_1280.jpg" alt="#" class="habitat-image" data-habitat="habitat-jungle" />
                </div>
                <div class="slide">
                    <img src="images/gorilla-3373856_1280.jpg" alt="#" class="habitat-image" data-habitat="habitat-jungle" />
                </div>
                <div class="slide">
                    <img src="images/panther-5739740_1280.jpg" alt="#" class="habitat-image" data-habitat="habitat-jungle" />
                </div>
                <div class="slide">
                    <img src="images/orang-utan-3534147_1280.jpg" alt="#" class="habitat-image" data-habitat="habitat-jungle" />
                </div>
                <a class="prev" onclick="prevSlide('habitat-jungle')">&lt;</a>
                <a class="next" onclick="nextSlide('habitat-jungle')">&gt;</a>
            </div>

            <div class="deschabitat" style="display: none;" id="deschabitat-jungle">
                <h6 class="titrehabitat">Description</h6>
                <p id="description-text-jungle"></p> <!-- Pour la description de l'habitat -->
                <p id="extra-text-jungle"></p> <!-- Pour les animaux -->
            </div>

        </div>

        <div class="Expohabitat" id="habitat-foret">
            <h5 class="titrehabitat" id="titre-habitat-foret">Forêt</h5>
            <div class="slider">
                <div class="slide active">
                    <img src="images/antarctica-8697791_1280.jpg" alt="#" class="habitat-image" data-habitat="habitat-foret" />
                </div>
                <div class="slide">
                    <img src="images/louparctique.jpg" alt="#" class="habitat-image" data-habitat="habitat-foret" />
                </div>
                <div class="slide">
                    <img src="images/renardantarctique.jpg" alt="#" class="habitat-image" data-habitat="habitat-foret" />
                </div>
                <div class="slide">
                    <img src="images/grey-seal-3281160_1280.jpg" alt="#" class="habitat-image" data-habitat="habitat-foret" />
                </div>
                <div class="slide">
                    <img src="images/ours polaire.jpg" alt="#" class="habitat-image" data-habitat="habitat-foret" />
                </div>
                <a class="prev" onclick="prevSlide('habitat-foret')">&lt;</a>
                <a class="next" onclick="nextSlide('habitat-foret')">&gt;</a>
            </div>

            <div class="deschabitat" style="display: none;" id="deschabitat-foret">
                <h6 class="titrehabitat">Description</h6>
                <p id="description-text-foret"></p>
                <p id="extra-text-foret"></p>
            </div>
        </div>

        <div class="Expohabitat" id="habitat-savane">
            <h5 class="titrehabitat" id="titre-habitat-savane">Savane</h5>
            <div class="slider">
                <div class="slide active">
                    <img src="images/kenya.jpg" alt="#" class="habitat-image" data-habitat="habitat-savane" />
                </div>
                <div class="slide">
                    <img src="images/lion-805084_1280.jpg" alt="#" class="habitat-image" data-habitat="habitat-savane" />
                </div>
                <div class="slide">
                    <img src="images/masai-giraffe-7235505_1280.jpg" alt="#" class="habitat-image" data-habitat="habitat-savane" />
                </div>
                <div class="slide">
                    <img src="images/zebra-3758310_1280.jpg" alt="#" class="habitat-image" data-habitat="habitat-savane" />
                </div>
                <div class="slide">
                    <img src="images/rhino-6065480_1280.jpg" alt="#" class="habitat-image" data-habitat="habitat-savane" />
                </div>
                <a class="prev" onclick="prevSlide('habitat-savane')">&lt;</a>
                <a class="next" onclick="nextSlide('habitat-savane')">&gt;</a>
            </div>

            <div class="deschabitat" style="display: none;" id="deschabitat-savane">
                <h6 class="titrehabitat">Description</h6>
                <p id="description-text-savane"></p>
                <p id="extra-text-savane"></p>
            </div>
        </div>

        <div class="Expohabitat" id="habitat-ocean">
            <h5 class="titrehabitat" id="titre-habitat-ocean">Océan</h5>
            <div class="slider">
                <div class="slide active">
                    <img src="images/océan.jpg" alt="#" class="habitat-image" data-habitat="habitat-ocean" />
                </div>
                <div class="slide">
                    <img src="images/dolphin-3416533_1280.jpg" alt="#" class="habitat-image" data-habitat="habitat-ocean" />
                </div>
                <div class="slide">
                    <img src="images//requin-marteau.jpg" alt="#" class="habitat-image" data-habitat="habitat-ocean" />
                </div>
                <div class="slide">
                    <img src="images/méduse.jpg" alt="#" class="habitat-image" data-habitat="habitat-ocean" />
                </div>
                <div class="slide">
                    <img src="images/tortue-mer.jpg" alt="#" class="habitat-image" data-habitat="habitat-ocean" />
                </div>
                <a class="prev" onclick="prevSlide('habitat-ocean')">&lt;</a>
                <a class="next" onclick="nextSlide('habitat-ocean')">&gt;</a>
            </div>

            <div class="deschabitat" style="display: none;" id="deschabitat-ocean">
                <h6 class="titrehabitat">Description</h6>
                <p id="description-text-ocean"></p>
                <p id="extra-text-ocean"></p>
            </div>
        </div>

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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Configuration des données pour chaque habitat
            const habitats = {
                "habitat-jungle": {
                    titres: ["Jungle ", "Tigre", "gorille", "Léopard", "Orang-outan"],
                    descriptions: [
                        "Nom : Jungle Tropicale<br>Description : Cet habitat est caractérisé par une végétation dense, un climat humide et abrite une grande diversité d'animaux.",
                        "Prénom : Izem<br>Race : Tigre malais<br>Habitat : Jungle",
                        "Prénom : King<br>Race : Gorille de l'ouest<br>Habitat : Jungle",
                        "Prénom : Simba<br>Race : Léopard Panthera pardus <br>Habitat : Jungle",
                        "Prénom : Silverback<br>Race : Orang-outan Bornéo<br>Habitat : Jungle"
                    ],
                    extraText: [
                        "Animaux présents : Tigre, Gorille, Léopard, Orang-outan",
                        "Ce tigre est réputé pour son caractère joueur.",
                        "Ce gorille est l'un des plus redoutables prédateurs.",
                        "Ce Léopard est connu pour son intelligence et son agilité.",
                        "Cette Orang-outan est le roi incontesté de la jungle."
                    ]
                },

                "habitat-foret": {
                    titres: ["Arctique", "Loup", "Renard", "Phoque", "Ours"],
                    descriptions: [
                        "Nom : Arctique<br>Description : Cet habitat est marqué par des étendues glacées, des glaciers imposants et une faune résiliente qui s'adapte aux rigueurs du froid polaire.",
                        "Prénom : volk<br>Race : Loup polaire <br>Habitat : Arctique",
                        "Prénom : Fox<br>Race : Renard arctique <br>Habitat : Arctique",
                        "Prénom : seal<br>Race : Phoque du Groenlandbr>Habitat : Arctique",
                        "Prénom : Mighty Joe<br>Race :Ours polaire<br>Habitat : Arctique"
                    ],
                    extraText: [
                        "Animaux présents : Loup, Renard, Phoque, Ours",
                        "Ce Loup est connu pour sa force redoutable.",
                        "Ce Renard est une espèce menacée.",
                        "Ce Phoque adore explorer les profondeurs des eaux.",
                        "Cette Ours est un protecteur du groupe."
                    ]
                },
                "habitat-savane": {
                    titres: ["Savane ", "Lion", "Girafe", "Zèbre", "Rhinocéros"],
                    descriptions: [
                        "Nom : Savane Africaine<br>Description : Vastes étendues herbeuses, cet habitat abrite les plus grands herbivores et prédateurs du monde.",
                        "Prénom : Simba<br>Race : Lion d'Afrique<br>Habitat : Savane",
                        "Prénom : kaizen<br>Race :  Girafe Masai<br>Habitat : Savane",
                        "Prénom : Marty<br>Race : Zèbre des plaines<br>Habitat : Savane",
                        "Prénom : Melman<br>Race :Rhinocéros  simum<br>Habitat : Savane"
                    ],
                    extraText: [
                        "Animaux présents : Lions, Éléphants, Zèbres, Girafes",
                        "Ce lion est le roi de la savane.",
                        "Cette girafe est un symbole de sagesse.",
                        "Ce zèbre est connu pour ses rayures uniques.",
                        "Ce rhinocéros est  grand herbivore avec une peau épaisse."
                    ]
                },
                "habitat-ocean": {
                    titres: ["Océan ", "Dauphins", "Requins", "Méduses", "Tortues"],
                    descriptions: [
                        "Nom : Océan Pacifique<br>Description : Un vaste écosystème marin avec une vie marine diversifiée, des eaux profondes aux récifs coralliens colorés.",
                        "Prénom : Flipper<br>Race : Dauphin Commun<br>Habitat : Océan",
                        "Prénom : Jaws<br>Race : Grand Requin Blanc<br>Habitat : Océan",
                        "Prénom : Nemo<br>Race : Méduse<br>Habitat : Océan",
                        "Prénom : Crush<br>Race : Tortue Luth<br>Habitat : Océan"
                    ],
                    extraText: [
                        "Animaux présents : Dauphins, Requins, Méduses, Tortues",
                        "Ce dauphin est très sociable et joueur.",
                        "Ce requin est un redoutable prédateur des océans.",
                        "Ce Méduse est célèbre pour sa couleur bleu claire.",
                        "Cette tortue parcourt des milliers de kilomètres chaque année."
                    ]
                }
            };

            // Fonction pour afficher le slide courant
            function showSlide(habitatId, index) {
                const slides = document.querySelectorAll(`#${habitatId} .slider .slide`);
                slides.forEach((slide, i) => {
                    slide.classList.remove('active');
                    if (i === index) {
                        slide.classList.add('active');
                    }
                });

                // Mise à jour du titre et des descriptions avec des sauts de ligne
                document.getElementById(`titre-habitat-${habitatId.split('-')[1]}`).innerHTML = habitats[habitatId].titres[index];
                document.getElementById(`description-text-${habitatId.split('-')[1]}`).innerHTML = habitats[habitatId].descriptions[index];
                document.getElementById(`extra-text-${habitatId.split('-')[1]}`).innerHTML = habitats[habitatId].extraText[index];
            }

            // Fonction pour gérer le clic sur le bouton suivant
            function nextSlide(habitatId) {
                const slides = document.querySelectorAll(`#${habitatId} .slider .slide`);
                const totalSlides = slides.length;
                let currentSlide = [...slides].findIndex(slide => slide.classList.contains('active'));
                currentSlide = (currentSlide + 1) % totalSlides;
                showSlide(habitatId, currentSlide);
            }

            // Fonction pour gérer le clic sur le bouton précédent
            function prevSlide(habitatId) {
                const slides = document.querySelectorAll(`#${habitatId} .slider .slide`);
                const totalSlides = slides.length;
                let currentSlide = [...slides].findIndex(slide => slide.classList.contains('active'));
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                showSlide(habitatId, currentSlide);
            }

            // Écouteurs d'événements pour chaque image
            document.querySelectorAll('.habitat-image').forEach(image => {
                image.addEventListener('click', function() {
                    const habitatId = this.getAttribute('data-habitat');
                    const descriptionDiv = document.getElementById(`deschabitat-${habitatId.split('-')[1]}`);

                    // Afficher ou masquer la div deschabitat
                    if (descriptionDiv.style.display === 'none' || descriptionDiv.style.display === '') {
                        descriptionDiv.style.display = 'block';
                        const slideIndex = [...this.parentNode.parentNode.children].indexOf(this.parentNode); // Indice de l'image cliquée
                        showSlide(habitatId, slideIndex); // Affiche la première image et description
                    } else {
                        descriptionDiv.style.display = 'none';
                    }
                });
            });

            // Écouteurs d'événements pour les boutons de navigation
            document.querySelectorAll('.next').forEach(nextBtn => {
                nextBtn.addEventListener('click', function() {
                    const habitatId = this.parentNode.parentNode.id; // Récupérer l'ID du habitat
                    nextSlide(habitatId);
                });
            });

            document.querySelectorAll('.prev').forEach(prevBtn => {
                prevBtn.addEventListener('click', function() {
                    const habitatId = this.parentNode.parentNode.id; // Récupérer l'ID du habitat
                    prevSlide(habitatId);
                });
            });

            // Initial display of the first slide for each habitat
            for (const habitatId in habitats) {
                showSlide(habitatId, 0);
            }
        });
    </script>
</body>