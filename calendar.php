<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<?php

include 'functions.php';

$weekdayCount = 1;
$dayNum = 1;

echo $firstOfMonth . "<br/>";
echo $dayFirstOfMonth . "<br/>";
echo $daysInMonth . "<br/>";
echo $selectedDay . "<br/>";
?>
<body>
<div class="row">
    <div class="col-md-6 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align:center; height:40px;">
                <div class="col-md-3">
                    <a href="" onclick="monthBackward()"><span class="glyphicon glyphicon-chevron-left"></span></a>
                </div>
                <div class="col-md-4 month">
                    <?PHP echo $getMonthName . " " ?>
                </div>
                <div class="col-md-2 year">
                    <?PHP echo $year ?>
                </div>
                <div class="col-md-3">
                    <a href="" onclick="monthForward()"><span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
            <div class="panel-body">
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
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <?php
                        /* For loopen kollar först efter blanka rutor, det vill säga, om månaden börjar på en
                         * onsdag, så kommer den printa blanka rutor på måndag och tisdag.
                         */
                        for ($i = 0; $i <= $blank - 1; $i++) {
                            //Denna if sats finns för att sätta veckonummer, även om
                            if ($weekdayCount == 1) {
                                echo "<td>Nope " . "Vecka " . ($weekOfYear - 1) . "</td>";
                                $weekdayCount++;
                            } else {
                                echo "<td>Nope</td>";
                                $weekdayCount++;
                            }
                        }

                        /* $weekdayCount är en räknare som räknar upp hur många dagar som gått i veckan
                        * När den kommit till veckans 7 dagar, gör den en ny rad
                        * Sedan kontrollerar den om $dayNum som är en räknare för att kolla hur många dagar
                        * man itererat igenom. När den nått hur många dagar det finns i månaden bryts while-loopen.
                        */
                        while ($weekdayCount <= 7) {
                            if ($weekdayCount == 1) {
                                echo "<td> Dag " . $dayNum . " Vecka " . $weekOfYear . "</td>";
                                $weekdayCount++;
                                $dayNum++;
                                $weekOfYear++;
                            }
                            echo "<td> " . $dayNum . "</td>";
                            $weekdayCount++;
                            $dayNum++;
                            if ($weekdayCount == 8) {
                                echo "</tr></tr>";
                                $weekdayCount = 1;
                            }
                            if ($dayNum == $daysInMonth + 1) {
                                break;
                            }
                        }

                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<a class="btn btn-sm btn-danger" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logga ut</a>
<script>
    function monthForward() {
        $.ajax({
            type: "POST",
            url: 'ajax.php',
            data: {action: 'monthForward'},
            success: function (html) {
                alert(html);
                $(month).replaceWith(html);

            }

        })
    }


    function monthBackward() {
        $.ajax({
            type: "POST",
            url: 'ajax.php',
            data: {action: 'monthBackward'},
            success: function (html) {
                alert(html);
            }

        });
    }

</script>