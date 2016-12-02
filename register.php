<?php
require_once("connection.php");

if (isset($_POST["username"]) && isset($_POST["password"])) {
    try {
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        $stmt = $conn->prepare("INSERT INTO user (username, password) VALUES (:username, :password)");
        $result = $stmt->execute(array(
            ":username" => $username,
            ":password" => $password
        ));

        $query = $conn->prepare("SELECT UserID FROM user WHERE Username = $username AND Password = $password");
        $resultSet = $query->execute();

        $sql = $conn->prepare("INSERT INTO calendar (CalendarID, UserID) VALUES (:calendarid, :userid)");
        $sql->execute(array(
            ":calendarid" => $calendarid,
            ":userid" => $resultSet
        ));

        if ($result) { //Sätter en alert, beroende på om dy lyckades eller inte
            $regsuccess = "Registrering lyckades!";
            header("Location: index.php?page=start.php");
        } else {
            $regfail = "Registrering misslyckades!";
            header("Location: index.php?page=start.php");
        }
    } catch (PDOException $e) {
        echo "<h1><strong>Hoppsan!</strong></h1><br/><h3>Nu hände något fel: </h3>" . $e->getMessage();
    }
}