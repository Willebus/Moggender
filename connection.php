<?php

$servername = "localhost";
$database = "calendar";
$connUsername = "root";
$connPassword = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $connUsername, $connPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Anslutning lyckades!<br/>";
} catch (PDOException $e) {
    echo "Anslutning misslyckades: " . $e->getMessage();
}
?>