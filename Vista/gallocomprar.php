<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar Gallos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/gallocomprar.css">
    <style>
        h1 {
            text-shadow: 2px 2px white, -2px -2px white, 2px -2px white, -2px 2px white;
            color: black;
        }
        .logo-small {
            width: 50px;
        }
    </style>
</head>
<body>
    <?php require_once "../header.php"; ?>
    <div class="container py-5">
        <h1 class="text-center">GALLOS DE PELEA</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
            <div class="col">
                <div class="card red">
                    <img src="./img/gallo1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gallo de Pelea</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3>S/50.00</h3>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseModal">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card yellow">
                    <img src="./img/gallo3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gallo de Pelea</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3>S/50.00</h3>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseModal">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card gray">
                    <img src="./img/gallo4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Gallo de Pelea</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3>S/50.00</h3>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#purchaseModal">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de compra -->
    <div class="modal fade" id="purchaseModal" tabindex="-1" aria-labelledby="purchaseModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="modal-title" id="purchaseModalLabel">Gallo Box</h5>
                    <div class="text-center mb-3">
                        <img src="./img/gallo_box_1.png" alt="Gallo Box" class="logo-small">
                    </div>
                    <p class="text-center">Recuerda activar las compras por internet con tu banco</p>
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Número de Tarjeta">
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="MM/AA">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="CVV">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Apellido">
                            </div>
                        </div>
                        <div class="mb-3 mt-3">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">PAGAR</button>
                    </form>
                    <p class="mt-3">Infórmate sobre el tratamiento de tus datos personales <a href="#">aquí</a>.</p>
                    <div class="text-center mt-3">
                        <img src="./img/visa.png" width="40" alt="Visa">
                        <img src="./img/Mastercard.png" width="40" alt="Mastercard">
                        <img src="./img/american-express.png" width="40" alt="American Express">
                        <img src="./img/logo-Diners.png" width="40" alt="Dinners Club">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<?php include('../footer.php'); ?>
</html>
