<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel=" shortcut icon" href="img/Phase-Studios-FaviIcon.png" type="image/x-icon">
    <title>Phase Studios | Contact</title>
</head>

<body class="hidden">
    <div class="onload" id="onload">
        <img src="img/Phase-Studios-FaviIcon.png" alt="" width="15%">
        <h3>Bienvenido!</h3>
    </div>
    <header class="navbar-header" id="navbar-header">
        <a href="#"><img src="img/Phase-Studios-FaviIcon.png" alt="" class="navbar-logo"></a>
        <button id="open" class="open-menu"><i class="bi bi-list"></i></button>
        <nav class="navbar" id="nav">
            <button id="close" class="close-menu"><i class="bi bi-x-circle"></i></button>
            <ul class="navbar-list">
                <li><a href="index.html" id="inicio" title="Inicio">Inicio</a></li>
                <li><a href="discord.html" id="discord" title="Discord">Discord</a></li>
                <li><a href="#" id="contacto" title="Contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <form action="" method="post" id="contact-form">
        <header class="contact-header">
            <div class="contact">
                <div class="contact-text">
                    <h3>Contactanos</h3>
                    <p>Para consultas o llegar a un acuerdo.</p>
                </div>
                <div class="contact-email">
                    <i class="bi bi-envelope-at-fill"></i>
                    <input type="email" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="contact-asunt">
                    <i class="bi bi-box-fill"></i>
                    <input type="text" name="asunt" id="asunt" placeholder="Asunt" required>
                </div>
                <div class="contact-message">
                    <i class="bi bi-chat-dots-fill"></i><textarea name="message" id="message" cols="30" rows="10"
                        placeholder="Message" required></textarea>
                </div>
                <div class="contact-recaptcha">
                    <div class="g-recaptcha" data-sitekey="6LdXqJMpAAAAAOIBCdUKeTPkl_VyUwyTlRct7XkX"></div>
                </div>
                <div class="contact-btn">
                    <button id="contact-btn" type="submit" name="send">Enviar</button>
                </div>
            </div>
            <div class="contact-info-head">
                <div class="contact-info">
                    <div class="contact-info-text">
                        <h3>Contact</h3>
                        <p>Si quieres trabajar con nosotros asi armar tu evento soñado, no lo dudes!<br>Aqui nos envias
                            directamente un Email el cual nosotros leeremos y<br>si nos gusta tu propuesta te
                            contactaremos!<br>Procura en la parte de mensaje, detallar tu propuesta y si es posible
                            dejar
                            alguna Red Social tuya<br>Como Twitter o Discord.</p>
                    </div>
                </div>
            </div>
        </header>
    </form>
    <?php
    include("php/email.php");
    ?>
    <header class="footer-header" style="margin-top: 10rem;">
        <div class="footer-content">
            <img src="img/Phase-Studios-FaviIcon.png" alt="" class="footer-icon">
            <div class="footer">
                <div class="footer-redes">
                    <h3><i class="fa-brands fa-x-twitter"></i> <a href="https://twitter.com/PhaseStudioss">Twitter</a>
                    </h3>
                    <h3><i class="fa-brands fa-youtube"></i> <a href="#">YouTube</a></h3>
                    <h3><i class="fa-brands fa-discord"></i> <a href="https://discord.gg/w4FBs5429m">Discord</a>
                    </h3>
                </div>
                <div class="footer-contact">
                    <h2>Contact</h2>
                    <h3><i class="fa-solid fa-envelope"></i> <a
                            href="https://phase-studios@gmail.com">phase.contacto@gmail.com</a></h3>
                </div>
            </div>
            <p>Page By <a href="https://github.com/Klaandee">Klande</a></p>
            <p>All rights reserved | Phase Studios 2024 ™</p>
            <p><a href="pages/terms-of-service.html">Terms Of Service</a></p>
        </div>
    </header>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="javascript/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</body>

</html>