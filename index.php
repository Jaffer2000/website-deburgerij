<!DOCTYPE html>
<html lang="nl">
<?php
include("db_config.php");
if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = "homepage";
}
?>
<head>
    <title>Wijkcentrum de Burgerij</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Booststrap4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--Own css-->
    <link href="css/css.css" rel="stylesheet">

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
