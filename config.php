<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "catsell";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database холбогдсонгүй: " . mysqli_connect_error());
}
?>
