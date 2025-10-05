<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dashboard";

// Connexion
$conn = mysqli_connect($host, $user, $pass, $db);

// Vérification
if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}
?>
