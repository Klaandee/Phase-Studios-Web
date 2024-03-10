<?php

if (isset($_POST['send'])) {
    if (!empty($_POST['email']) && !empty($_POST['asunt']) && !empty($_POST['message'])) {
        $email = "phase.contacto@gmail.com";
        $emailuser = $_POST['email'];
        $asunt = $_POST['asunt'];
        $message = $_POST['message'];

        $ip = $_SERVER['REMOTE_ADDR'];
        $captcha = $_POST['g-recaptcha-response'];
        $secretkey = "6LdXqJMpAAAAABmOXBHP8Ajc343Bkaf1BlSz4C2B";

        $resp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");
        $atributos = json_decode($resp, TRUE);

        $header = "From: $emailuser" . "\r\n";
        $header .= "Reply-To: $emailuser" . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();
        @mail($email, $emailuser, $asunt, $message);
        if (!$atributos['success']) {
            echo "<div class='error'>Completa el Captcha.</div>";
        } elseif ($email) {
            echo "<div class='success'>Formulario enviado correctamente!<br>Pronto nos contactaremos con usted</div>";
        }
    }
    ?>
    <script>
        history.replaceState(null, null, location.pathname);
    </script>
    <?php
}