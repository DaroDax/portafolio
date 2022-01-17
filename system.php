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
    <link rel="stylesheet" href="./frontend/css/program.css">


</head>

<body>

    <?php require('./frontend/partials/header.php') ?>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="card text-dark col-7"><div class="card-body">
                <div class="img-spaced">
                    <div class="img-same"><img class="qkiere-img" src="./frontend/img/recursos/qkiere1.jpg" alt=""></div>
                    <div class="img-same"><img class="qkiere-img" src="./frontend/img/recursos/qkiere2.jpg" alt=""></div>
                </div>    

            </div></div>
            <div class="info-pro col-5"> 
                <h3 class="text-uppercase">Qkiere.com</h3>
                <p style="color:#adb5bd;">Sitio web, OnePage, para domicilios con interfaz para clientes, tiendas y domiciliarios, con respuestas en tiempo real mediante AJAX, con una interfaz amigable y familiar.</p>  
                <a href="https://github.com/DaroDax/qkiere-delivery" target="_blank" style="color: #dee2e6;">En Github <i class="fab fa-github"></i></a>  
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="card text-dark col-7"><div class="card-body">
                <div class="img-spaced">
                    <div class="img-same"><img class="wisp-img" src="./frontend/img/recursos/wisp.png" alt=""></div>
                    <div class="img-same"><img class="wisp-img" src="./frontend/img/recursos/wispindex.png" alt=""></div>
                </div>    

            </div></div>
            <div class="info-pro col-5"> 
                <h3 class="text-uppercase">WispLite</h3>
                <p style="color:#adb5bd;">Servicio para proveedores de internet mediante sistemas Mikrotik y su respectiva API, sistema de factura, mensualidad, y lista de clientes.</p>  
                <a href="https://wisplite.intercod.co" target="_blank" style="color: #dee2e6;">Ir a Wisp Lite&copy</a>  
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="card text-dark col-7"><div class="card-body">
                <div class="img">
                    <div class="img-one"><img class="gif-img" src="./frontend/img/recursos/gif.png" alt=""></div>
                </div>    

            </div></div>
            <div class="info-pro col-5"> 
                <h3 class="text-uppercase">GIF Finder</h3>
                <p style="color:#adb5bd;">Buscador de gifs en tiempo real con la API de giphy mediante Fetch, React y Hooks, hosteada en github pages.</p>  
                <a href="https://darodax.github.io/react-curso-gif/" target="_blank" style="color: #dee2e6;">Ir a GiFinder</a>  
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="card text-dark col-7"><div class="card-body">
                <div class="img">
                    <div class="img-one"><img class="chat-img" src="./frontend/img/recursos/chat.png" alt=""></div>
                </div>    

            </div></div>
            <div class="info-pro col-5"> 
                <h3 class="text-uppercase">Grupal Chat</h3>
                <p style="color:#adb5bd;">Chat grupal, con multiples conexiones gracias a Sockets, impulsado por NodeJS y express, y base de datos MongoDB. Con comandos para mensajes privados.</p>  
                <a href="https://chat-nod-js.herokuapp.com/" target="_blank" style="color: #dee2e6;">Ir a MyChat</a>  
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