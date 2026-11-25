<?php
$servername = "sql108.infinityfree.com";
$username = "if0_43513911";
$password = "Nikitapatle1007";
$database = "if0_43513911_childdb";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $database
);

if (!$conn) {
    die("Database connection failed.");
}
?>