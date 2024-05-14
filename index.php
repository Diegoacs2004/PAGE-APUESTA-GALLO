<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/reset.css">
    <title>Index</title>
</head>

<body>
    <?php require_once "header.php"; ?>

    <?php header("Location: vista/inicio.php");
    exit; ?>
    <?php
    require_once "footer.php"
    ?>

=======
    <title>Proyecto-gallo-apuesta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/reset.css">
    <link rel="stylesheet" href="./CSS/index.css">
</head>

<body>
    <div id="main">
        <div class="main-header">
            <?php
            require_once('header.php');
            ?>
        </div>
        <div>

            <?php require_once('./Vista/InicioVista.php'); ?>
        </div>

        <h1>PAGINA PRINCIPAL</h1>
        <div class="main-footer">
            <?php require_once('footer.php');
            ?>
        </div>


    </div>
>>>>>>> 14b670b3b8282eae88f8a80a8d0f9bdfee76dd9a
</body>

</html>