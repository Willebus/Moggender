<?php
require_once("connection.php");

if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $stmt = $conn->prepare("INSERT INTO user (username, password) VALUES (:username, :password)");
    $result = $stmt->execute(array(
        ":username" => $username,
        ":password" => $password
    ));
    if ($result) { //Sätter en alert, beroende på om dy lyckades eller inte
        $regsuccess = "Registrering lyckades!";
        header("Location: index.php?page=start.php");
    } else {
        $regfail = "Registrering misslyckades!";
        header("Location: index.php?page=start.php");
    }
}