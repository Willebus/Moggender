<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<?php
$date = getdate(); //Kollar datumet just nu
$day = $date['mday']; //Kollar dagen på $date
$month = $date['mon']; // Kollar månaden på $date
$year = $date['year']; // Kollar året på $date
$firstOfMonth = date('01-'.$month.'-'.$year); // Om man väljer $month och $year sätter den ut 1:a dagen i månaden
$selectedDay = date($day.'-'.$month.'-'.$year); // Denna variabeln ska användas för att få ut data på en specific dag
$dayFirstOfMonth = date('D', strtotime($firstOfMonth)); // Denna variabeln kollar dagen som är den 1:a i månaden
switch($dayFirstOfMonth){ // Detta är en switch som kollar både bilken dag det är som den 1:a är, men sätter även gråa rutor bakom om det finns tomma rutor.
    case "Mon": $blank = 0; break; // Om det är söndag, sätter den inga gråa rutor bakom
    case "Tue": $blank = 1; break; // Om det är måndag sätter den en grå ruta bakom
    case "Wed": $blank = 2; break;
    case "Thu": $blank = 3; break;
    case "Fri": $blank = 4; break;
    case "Sat": $blank = 5; break;
    case "Sun": $blank = 6; break;
}
$weekOfYear = date('W', strtotime($firstOfMonth)); // Den sätter ut veckan på den första i månaden, inte klar än?
$daysInMonth = cal_days_in_month(0, $month, $year); // Denna kollar hur många dagar det finns i månaden du valt.

$weekdayCount = 1;
$dayNum = 1;

echo $firstOfMonth."<br/>";
echo $dayFirstOfMonth."<br/>";
echo $daysInMonth."<br/>";
echo $selectedDay."<br/>";
?>

<body>
    <table class="table">
        <tr>
            <th>Mån</th>
            <th>Tis</th>
            <th>Ons</th>
            <th>Tors</th>
            <th>Fre</th>
            <th>Lör</th>
            <th>Sön</th>
        </tr>
        <tr>
          <?php
          for($i = 0; $i <= $blank-1; $i++)
          {
              echo"<td>Nope</td>";
              $weekdayCount++;
          }
              while($weekdayCount <= 7) // Den printar ut dagarna i veckan och sätter siffra på det.
              {
                  echo "<td>".$dayNum."</td>";
                  $weekdayCount++;
                  $dayNum++;
                  if($weekdayCount == 8)
                  {
                      echo "</tr></tr>";
                      $weekdayCount = 1;

                  }
                  if($dayNum == $daysInMonth+1)
                  {
                      break;
                  }
              }

          ?>
        </tr>
    </table>
</body>

