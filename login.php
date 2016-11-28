<?php
require_once("connection.php");

try
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    /*
    if($username == "")
    {
        echo "Du måste skriva in ditt användarnamn";
    }

    if($password = "")
    {
       echo "Du måste skriva in ditt lösenord";
    }
    */

    $stmt = $conn->prepare("SELECT * FROM user WHERE username = :username AND password = :password");
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);

    if($rows > 0)
    {
        header("Location: calendar.php");
    }
    else
    {
        echo "Användare ej hittad!";
    }
}
catch(PDOException $e)
{
    echo "Login misslyckades: " . $e->getMessage();
}
?>