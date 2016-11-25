<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<?php
$date = getdate();
$day = $date['mday'];
$month = $date['mon'];
$year = $date['year'];
$firstOfMonth = date('01-'.$month.'-'.$year);
$selectedDay = date($day.'-'.$month.'-'.$year);
$dayFirstOfMonth = date('D', strtotime($firstOfMonth));
$weekOfYear = date('W', strtotime($firstOfMonth));
$daysInMonth = cal_days_in_month(0, $month, $year);
switch($dayFirstOfMonth){
    case "Sun": $blank = 0; break;
    case "Mon": $blank = 1; break;
    case "Tue": $blank = 2; break;
    case "Wed": $blank = 3; break;
    case "Thu": $blank = 4; break;
    case "Fri": $blank = 5; break;
    case "Sat": $blank = 6; break;
}

$dayCount = 1;

echo $firstOfMonth."<br/>";
echo $dayFirstOfMonth."<br/>";
echo $daysInMonth."<br/>";
echo $selectedDay."<br/>";
?>
<body>
    <table class="table"></table>
</body>

