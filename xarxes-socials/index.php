<?php

    // Declaració de diferents Xarxes Socials
    $twitter = "https://twitter.com/craftnebula";
    $discord = "https://discord.gg/RNTQbjcD4U";
    $telegram = "https://t.me/nebulasuport";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Serveis | Nebula Hosting</title>
        <link href="../css/styles.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../img/favicon.png"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>

        <nav>

            <img src="../img/logo-lila.png" class="nav-logo" alt="Logo nebula de color lila"/>
            
            <ul>
                <li class="nav-seleccionat"><a href="../">Inici</a></li>
                <li><a href="#">Serveis</a></li>
                <li class="login"><a href="https://login.nebula.cat/">Login</a></li>
            </ul>

        </nav>

        <header class="header-serveis">

            <div class="text-header">
                <h1 class="header-titol">Xarxes Socials</h1>
                <p class="header-subtitol">Necessites suport o informació?</p>
            </div>

        </header>

        <img src="../img/separador-1.png" class="separador-header" alt="Separador del header"/>

        <?php

            if($_GET['id']=="twitter") {
                header("Location: $twitter");
            } elseif ($_GET['id']=="discord") {
                header("Location: $discord");
            } elseif ($_GET['id']=="telegram") {
                header("Location: $telegram");
            } else {
                ?>

            <div class="contingut">
                <div class="xarxes-socials">
                    <p class="botons-xarxes">
                        <a href="<?php echo($twitter); ?>"><i class="fab fa-twitter"></i> Twitter</a>
                    </p>
                    <p class="botons-xarxes">
                        <a href="<?php echo($discord); ?>"><i class="fab fa-discord"></i> Discord</a>
                    </p>
                    <p class="botons-xarxes">
                        <a href="<?php echo($telegram); ?>"><i class="fab fa-telegram-plane"></i> Telegram</a>
                    </p>
                </div>
            </div>


                <?php
            }
 
        ?>

        </div>

        <footer>

            <div class="footer-esq">

                <img class="footer-logo" src="../img/logo-blanc.png" alt="Logo nebula footer"/>
                <p class="footer-copy-text">Copyright &copy; 2021 Nebula Hosting</br>Desenvolupat per <a href="https://gabrielfranco.me">Gabi Franco</a></p>

            </div>

            <div class="footer-dret">

                <h2 class="footer-dret-titol">Serveis</h2>

                <ul>
                    <li><a href="/serveis">Hosting Web</a></li>
                    <li><a href="/serveis">Certificats HTTP</a></li>
                    <li><a href="/serveis">Instal·lació de CMS</a></li>
                </ul>

            </div>

        </footer>

    </body>
</html>
