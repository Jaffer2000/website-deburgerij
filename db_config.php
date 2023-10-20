<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "deburgerij";

$conn = mysqli_connect($servername, $username, $password, $db);
  if (!$conn) {
    die("Connection with Database failed: " . mysqli_connect_error());
  }
?>