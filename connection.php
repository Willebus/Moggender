<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=calender", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Anslutning lyckades!";
}
catch(PDOException $e)
{
    echo "Kunde inte ansluta: " . $e->getMessage();
}
?>