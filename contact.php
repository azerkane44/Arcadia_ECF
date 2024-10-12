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

        <div class="container">
            <form action="action_page.php">

                <label for="Titre">Titre</label>
                <input type="text" id="ftitre" name="firstname" placeholder="Un titre">

                <label for="email">E-mail</label>
                <input type="text" id="lemail" name="lastname" placeholder="Votre e-mail">



                <label for="Description">Description</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">

            </form>
        </div>

    </main>

    <footer>

    </footer>


</body>