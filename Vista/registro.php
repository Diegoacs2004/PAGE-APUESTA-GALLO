<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/loginReg.css">
</head>

<body>
    <?php require_once "../header.php"; ?>
    <div class="contenedor-principal">
        <div class="row">
            <div class="col-md-6 text-center"> <!-- Columna para la imagen -->
                <img src="img/gallo_box_1.png" width="400" height="400" alt="Imagen" class="img-fluid mx-auto d-block">
            </div>
            <div class="col-md-6"> <!-- Columna para el formulario -->
                <form class="container-registro">
                    <div class="title-init">
                        <h1>REGISTRATE</h1>
                    </div>
                    <div class="container-inputs">
                        <div class="row">
                            <div class="col">
                                <input type="text" placeholder="Nombre:">
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Apellido:">
                            </div>
                        </div>
                        <div>
                            <input type="email" placeholder="Correo:">
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" placeholder="Contraseña:">
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Confirmar Contraseña:">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="email" placeholder="Telefono:">
                        </div>
                    </div>
                    <button type="submit">REGISTRATE</button>
                </form>
            </div>
        </div>
    </div>
</body>

<?php include('../footer.php'); ?>