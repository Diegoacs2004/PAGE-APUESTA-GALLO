<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/inicio.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="./js/inicio.js"></script>
</head>

<body>
    <?php require_once "../header.php"; ?>
    <div class="contenedor-total">
        <div id="slide">
            <div class="slide-inner ">
                <input class="slide-open" type="radio" id="slide-1" name="slide" aria-hidden="true" hidden="" checked="checked">
                <div class="slide-item">
                    <video class="h-100 w-100 onlypc" autoplay="" loop="" muted="" playsinline="">
                        <source type="video/mp4" src="https://www.cockfight.pe/manager/assets/sources/Peru-home-deskop.mp4?v=1.0">
                    </video>
                </div>
                <input class="slide-open" type="radio" id="slide-2" name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">

                    <img src="img/gallo_evento_1.jpg" style="width: 70%; height: 100%;">
                </div>
                <input class="slide-open" type="radio" id="slide-3" name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <img src="https://www.migueltroyano.com/wp-content/uploads/2020/09/excel_guardar_como_csv.jpg">
                </div>
                <label for="slide-3" class="slide-control prev control-1">‹</label>
                <label for="slide-2" class="slide-control next control-1">›</label>
                <label for="slide-1" class="slide-control prev control-2">‹</label>
                <label for="slide-3" class="slide-control next control-2">›</label>
                <label for="slide-2" class="slide-control prev control-3">‹</label>
                <label for="slide-1" class="slide-control next control-3">›</label>
                <ol class="slide-indicador">
                    <li>
                        <label for="slide-1" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-2" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-3" class="slide-circulo">•</label>
                    </li>
                </ol>
            </div>
        </div>
        <section class="pb-3">
            <div class="container pb-5">
                <div class="contenedor-cards">
                    <div class="card card-orange">
                        <div class="card-content">
                            <div class="tittle-card">
                                <h2>EVENTOS</h2>
                            </div>
                            <div>
                                <h3>>VER</h3>
                                <p>Pelea de gallos en el Coliseo de Lima</p>
                            </div>
                            <div>
                                <p>Ver más <i class="fas fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-blue">
                        <div class="card-content spaced">
                            <div class="tittle-card">
                                <H2>EN VIVO</H2>
                            </div>
                            <div>
                                <h3>>VER</h3>
                                <p>Pelea de gallos en el Coliseo de Lima</p>
                            </div>
                            <div>
                                <p>Actualizaciones recientes</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-green">
                        <div class="card-content">
                            <div class="tittle-card">
                                <h2>GALLOS</h2>
                            </div>
                            <div>
                                <h3>>VER</h3>
                                <p>Pelea de gallos en el Coliseo de Lima</p>
                            </div>
                            <div>
                                <p>Formulario de contacto</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div>
            <div>
                <div class="container">
                    <div>
                        <h1>PELEAS EN VIVO</h1>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div>
                <div class="container">
                    <div>
                        <h1>EVENTOS</h1>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div>
                <div class="container">
                    <div>
                        <h1>GALLOS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "../footer.php"; ?>
</body>

</html>