<?php

session_start();

$servername = "localhost";
$database = "calender";
$connUsername = "root";
$connPassword = "";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=$database", $connUsername, $connPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Anslutning misslyckades: " . $e->getMessage();
}
?>