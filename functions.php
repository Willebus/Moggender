<?php
$date = getdate(); //Kollar datumet just nu
$day = $date['mday']; //Kollar dagen på $date
$month = $date['mon']; // Kollar månaden på $date
$year = $date['year']; // Kollar året på $date
$gregorianToJulianDay = gregoriantojd($month, $day, $year); // Konverterar nuvarande dagen till Julianska dagräkningen
$getMonthName = jdmonthname($gregorianToJulianDay, 1); // Använder variabeln för att kolla vilken dag i månad, och vilken kalendertyp
$firstOfMonth = date('01-' . $month . '-' . $year); // Om man väljer $month och $year sätter den ut 1:a dagen i månaden
$selectedDay = date($day . '-' . $month . '-' . $year); // Denna variabeln ska användas för att få ut data på en specific dag
$dayFirstOfMonth = date('D', strtotime($firstOfMonth)); // Denna variabeln kollar dagen som är den 1:a i månaden

switch ($dayFirstOfMonth) { // Detta är en switch som kollar både bilken dag det är som den 1:a är, men sätter även gråa rutor bakom om det finns tomma rutor.
    case "Mon":
        $blank = 0;
        break; // Om det är söndag, sätter den inga gråa rutor bakom
    case "Tue":
        $blank = 1;
        break; // Om det är måndag sätter den en grå ruta bakom
    case "Wed":
        $blank = 2;
        break;
    case "Thu":
        $blank = 3;
        break;
    case "Fri":
        $blank = 4;
        break;
    case "Sat":
        $blank = 5;
        break;
    case "Sun":
        $blank = 6;
        break;
}

$weekOfYear = date('W', strtotime($firstOfMonth)); // Den sätter ut veckan på den första i månaden, inte klar än?
$daysInMonth = cal_days_in_month(0, $month, $year); // Denna kollar hur många dagar det finns i månaden du valt.

?>