<!DOCTYPE html>
<html lang="nl">
<?php
include("db_config.php");
if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = "homepage";
}

// Start de sessie
session_start();
?>

<head>
    <title>Wijkcentrum de Burgerij</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Booststrap4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--Own css-->
    <link href="css/css.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/phone.css' rel='stylesheet'>
</head>

<body>

    <!-- header -->
    <?php include("header.php"); ?>
    <br>

    <div class="content">
        <!--pagina inhoud-->
        <?php include "inhoud/$pagina.php"; ?>
    </div>

    <!--Footer-->
    <?php include("footer.php"); ?>

</body>

</html>