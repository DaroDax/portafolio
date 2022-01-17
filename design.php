<?php
$data = @file_get_contents('./JSON/aboutme.json'); //carga el JSON
$info = json_decode($data, true); //lo guarda en una variable php
/* print_r($info);
echo $info['aboutme']['name'];
echo $info['aboutme']['cellphone']['sim1'];
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $info['aboutme']['name'] ?> - Programas</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="./frontend/css/bootstrap/bootstrap.min.css">

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="./frontend/css/fontawesome/css/all.css">

    <!-- CUSTOM FILES -->
    <link rel="stylesheet" href="./frontend/css/main.css">
    <link rel="stylesheet" href="./frontend/css/design.css">


</head>

<body>

    <?php require('./frontend/partials/header.php') ?>

    <div class="container mt-4 mb-4">
        <div class="line-right">

            <div class="info-line">
                <h3 class="text-uppercase">TU TATTOO</h3>
                <p style="color:#adb5bd;">Logo realizado con illustrator, en representación de la confianza que hay entre un tatuador y su cliente, usando tecnicas de tatuajes como el blanco y negro, y una mnadala de fondo.</p>
                <a href="https://www.instagram.com/dx.tattoo/" target="_blank" style="color: #dee2e6;">Ir al Instagram <i class="fab fa-instagram"></i></a>
            </div>

            <div class="img-line">
                <div class="logo-box">
                    <img class="logo-img" src="./frontend/img/recursos/tutattoo.jpg" alt="">
                </div>

            </div>
        </div>

        <hr>

        <div class="line-left">
            <div class="img-line">
                <div class="logo-box">
                    <img class="logo-img" src="./frontend/img/recursos/PROAUDIOA.png" alt="">
                </div>
            </div>

            <div class="info-line text-left">
                <h3 class="text-uppercase">ProAudio</h3>
                <p style="color:#adb5bd;">Autolavada y establecimiento donde se instalan equipos de sonido, mantenimiento y servicio mecanico para los autos, con una fuente utilizada en pegatinas de autos, y diseño minimalista.</p>
                <a href="https://www.instagram.com/msproaudio.spa/" target="_blank" style="color: #dee2e6;">Ir al Instagram <i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <hr>

        <div class="line-right">

            <div class="info-line">
                <h3 class="text-uppercase">TB.</h3>
                <p style="color:#adb5bd;">Marca de ropa, logo multi usos, con clase y colores elegantes, usando la rueda monocromatica, con el nombre de la tienda, y una breve descripcion con el eslogan.</p>
                <a href="https://www.instagram.com/tatianabarrientos_18/" target="_blank" style="color: #dee2e6;">Ir al Instagram <i class="fab fa-instagram"></i></a>
            </div>

            <div class="img-line">
                <div class="logo-box">
                    <img class="logo-img" src="./frontend/img/recursos/mom.jpg" alt="">
                </div>

            </div>
        </div>

        <hr>

        <div class="line-left">
            <div class="img-line">
                <div class="logo-box">
                    <img class="logo-img" src="./frontend/img/recursos/shelly.jpg" alt="">
                </div>
            </div>

            <div class="info-line text-left">
                <h3 class="text-uppercase">Shelly Brawl Stars</h3>
                <p style="color:#adb5bd;">Comision de un cliente, para un concurso, sobre el personaje del famoso juego de SuperCell Brawl Stars.</p>
                <a href="https://www.instagram.com/p/CEe540Cgd-O/?utm_source=ig_web_copy_link" target="_blank" style="color: #dee2e6;">Ir al Instagram <i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <hr>

        <div class="line-right">

            <div class="info-line">
                <h3 class="text-uppercase">Miles Morales</h3>
                <p style="color:#adb5bd;">Manejo del pixel art con sombras y luces, sobre el famoso personaje de la francicia de Marvel, Spiderman.</p>
                <a href="https://www.instagram.com/p/CYkPaH-JHmb/?utm_source=ig_web_copy_link" target="_blank" style="color: #dee2e6;">Ir al Instagram <i class="fab fa-instagram"></i></a>
            </div>

            <div class="img-line">
                <div class="logo-box">
                    <img class="logo-img" src="./frontend/img/recursos/milos.jpg" alt="">
                </div>

            </div>
        </div>

    </div>



    <!-- JQUERY -->
    <script src="./frontend/js/jquery-3.6.0.min.js"></script>
    <script src="./frontend/js/bootsrap/bootstrap.bundle.min.js"></script>

    <!-- SWEET ALERT -->
    <script src="./frontend/js/sweetalert2.all.min.js"></script>


</body>

</html>