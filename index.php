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
    <title><?php echo $info['aboutme']['name'] ?> - CV</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="./frontend/css/bootstrap/bootstrap.min.css">

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="./frontend/css/fontawesome/css/all.css">

    <!-- CUSTOM FILES -->
    <link rel="stylesheet" href="./frontend/css/main.css">


</head>

<body>

    <?php require('./frontend/partials/header.php') ?>

    <div class="img-brand"><img class="brand-img" src="./frontend/img/code.jpg" alt=""></div>

    <div class="container">

        <div class="header-img m-2">
            <div class="img-container"><img class="profile-img" src="./frontend/img/nico.jpeg" alt="Person Img"></div>
        </div>

        <div class="info">
            <div class="profile-info">
                <h1 class="h3"><?php echo $info['aboutme']['name'] ?><span class="text-info line">__</span></h1>
            </div>

            <div class="contact-info border p-2">
                <div class="contact-item"><a class="text-decoration-none text-white" href="#" onclick="obtenerEmail();"><i class="far fa-envelope"></i> <span class="hidden-text">Gmail</span> </a></div>
                <div class="contact-item"><a class="text-decoration-none text-white" target="_blank" href="https://<?php echo $info['aboutme']['instagram'] ?>"><i class="fab fa-instagram"></i> <span class="hidden-text">Instagram</span></a></div>
                <div class="contact-item"> <a class="text-decoration-none text-white" target="_blank" href="https://<?php echo $info['aboutme']['github'] ?>"><i class="fab fa-github"></i> <span class="hidden-text">GitHub</span></a></div>
                <div class="contact-item"> <a class="text-decoration-none text-white" target="_blank" href="https://<?php echo $info['aboutme']['linkedin'] ?>"><i class="fab fa-linkedin"></i> <span class="hidden-text">LinkedIn</span></a></div>
                <div class="contact-item"> <a class="text-decoration-none text-white" target="_blank" href="https://wa.me/<?php echo $info['aboutme']['cellphone']['sim2'] ?>"><i class="fab fa-whatsapp"></i> <span class="hidden-text"><?php echo $info['aboutme']['cellphone']['sim2'] ?></span></a></div>
            </div>

            <div class="desc mt-3 victor">
                <div class="row">

                    <div class="short-desc border p-3 col-4">
                        <h6><?php echo $info['aboutme']['description'] ?></h6>
                    </div>

                    <div class="hability border col-8">
                        <div class="hab-list">
                            <ul>
                                <?php for ($i = 1; $i <= count($info['programs']) / 2; $i++) { ?>
                                    <li>
                                        <div class="hab-element mt-3">
                                            <b><?php echo $info['programs']['hab' . $i] ?></b>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: <?php echo $info['programs']['por' . $i] ?>;" aria-valuenow="<?php echo $info['programs']['por' . $i] ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $info['programs']['por' . $i] ?></div>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="edu-section mt-2">
            <h3>Educación<span class="text-info line">__</span></h3>

            <div class="educacion border p-2 mb-4">
                <div class="row">
                    <?php for ($i = 1; $i <= count($info['education']); $i++) { ?>
                        <div class="edu-element col-6 mt-2">
                            <h5 class="fw-bold"><?php echo $info['education']['car' . $i]['title'] ?></h5>
                            <h6 class="fw-light victor"><?php echo $info['education']['car' . $i]['site'] ?></h6>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>

    </div>


    </div>

    <!-- JQUERY -->
    <script src="./frontend/js/jquery-3.6.0.min.js"></script>
    <script src="./frontend/js/bootsrap/bootstrap.bundle.min.js"></script>

    <!-- SWEET ALERT -->
    <script src="./frontend/js/sweetalert2.all.min.js"></script>

    <script>
        function obtenerEmail() {
            const email = '<?php echo $info['aboutme']['email'] ?>';

            var aux = document.createElement("input");
            aux.setAttribute("value", '<?php echo $info['aboutme']['email'] ?>');
            document.body.appendChild(aux);
            aux.select();
            document.execCommand("copy");

            document.body.removeChild(aux);

            let timerInterval
            Swal.fire({
                title: 'Mi gmail se ha copiado en tu portapapeles!',
                html: '<b><?php echo $info['aboutme']['email'] ?></b>.',
                timer: 2000,
                timerProgressBar: false,
                didOpen: () => {
                    
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                }
            })
        }
    </script>
</body>

</html>