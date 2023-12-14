<?php
// Controleer of de gebruiker is ingelogd
if (!isset($_SESSION["ingelogd"]) || $_SESSION["ingelogd"] == false) {
    // Niet ingelogd, doorsturen naar het inlogscherm
   include("login.php");
//    $test = $_SESSION["ingelogd"];
//    echo"test: $test";
    exit;
}
?>
