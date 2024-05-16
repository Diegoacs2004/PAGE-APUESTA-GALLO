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
    <!-- Carousel wrapper -->
    <div id="slide">
        <div class="slide-inner py-3">
            <input class="slide-open" type="radio" id="slide-1" name="slide" aria-hidden="true" hidden="" checked="checked">
            <div class="slide-item">
                <img src="img/gallo_evento_1.jpg" style="width: 70%; height: 100%;">
            </div>
            <input class="slide-open" type="radio" id="slide-2" name="slide" aria-hidden="true" hidden="">
            <div class="slide-item">
                <video class="h-100 w-100 onlypc" autoplay="" loop="" muted="" playsinline="">
                    <source type="video/mp4" src="https://www.cockfight.pe/manager/assets/sources/Peru-home-deskop.mp4?v=1.0">
                </video>
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

    <section>
        <div class="container">
            <div class="row content">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card border-2">
                        <img src="https://media.istockphoto.com/id/626045422/es/foto/dos-del-spreadon-de-la-lucha-del-martillo-en-la-granja.jpg?s=612x612&w=0&k=20&c=UueJrD5TuofWXCvtWTpmo1BZgnIYTOPOQl6iP3TFpX4=" class="card-img-top" alt="Eventos">
                        <div class="card-body contenido text-center">
                            <h6 class="card-title">Eventos <span class="material-symbols-outlined" style="vertical-align: middle;">arrow_forward</span> </h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card border-2">
                        <img src="https://media.istockphoto.com/id/1980207106/es/foto/young-man-watching-soccer-game-at-home.jpg?s=612x612&w=0&k=20&c=p5RHiSVhgCpBWEDmW985Wfe5ZSTF76tdICH-ZY6z9JA=" class="card-img-top" alt="Eventos">
                        <div class="card-body contenido text-center">
                            <h6 class="card-title">En Vivo <span class="material-symbols-outlined" style="vertical-align: middle;">arrow_forward</span> </h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card border-2">
                        <img src="https://media.istockphoto.com/id/1361718100/es/foto/hermoso-gallo-de-pie-en-la-hierba-en-un-fondo-verde-de-naturaleza-borrosa.jpg?s=612x612&w=0&k=20&c=-L-WR9O9USjxQvsUySE5v6Cdre6wlYnur7lO9Pls0Wc=" class="card-img-top" alt="Eventos">
                        <div class="card-body contenido text-center">
                            <h6 class="card-title">Compra tu gallo <span class="material-symbols-outlined" style="vertical-align: middle;">arrow_forward</span> </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>
<?php
require_once "../footer.php"
?>
<!-- Carousel wrapper -->
</body>

</html>