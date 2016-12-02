<?php
require_once("connection.php");

try {
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";

    $stmt = $conn->prepare("SELECT * FROM user WHERE Username = :username AND Password = :password");
    $stmt->execute(array(
        ":username" => $username,
        ":password" => $password
    ));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($rows > 0) {
        session_start();
        $_SESSION['username'] = $username; //Sätter sessionens användarnamn
    } else {
        echo "Användare ej hittad!";
    }

    if (isset($_SESSION['username'])) { //Om sessionens användarnamn är satt så tar den dig till din kalender
        $username = $_SESSION['username'];
        header("Location: index.php?page=calendar.php");
        /*
        echo "Hejsan " . $username . "!";
        echo "Detta betyder att du är inloggad!";
        echo "<a href='logout.php'>Logga ut</a>";
        */
    }
} catch (PDOException $e) {
    echo "Login misslyckades: " . $e->getMessage();
}
?>