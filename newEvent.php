<?php
require_once ("connection.php");
include ("functions.php");

if(isset($_POST["title"]) && isset($_POST["startDate"]) && isset($_POST["endDate"])) {
    $title = ($_POST["title"]);
    $startdate = ($_POST["startDate"]);
    $enddate = ($_POST["endDate"]);

    $creator = ($_SESSION["UserID"]);
    $calendarid = ("SELECT CalendarID FROM calendar WHERE $creator = calendar.UserID");

    $stmt = $conn->prepare("INSERT INTO event (Creator, CalendarID, Title, StartDate, EndDate) VALUES (:Creator, :CalendarID, :Title, :StartDate, :EndDate)");
    $stmt->execute(array(
        ":Creator" => $creator,
        ":CalendarID" => $calendarid,
        ":Title" => $title,
        ":StartDate" => $startdate,
        ":EndDate" => $enddate
    ));

    if(isset($_POST["wholeDay"])){ //Checkbox för heldags händelse

    }
}
?>