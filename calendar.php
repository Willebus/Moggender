<?php
require_once("connection.php");
include 'functions.php';

$weekdayCount = 1;
$dayNum = 1;

echo $firstOfMonth . "<br/>";
echo $dayFirstOfMonth . "<br/>";
echo $daysInMonth . "<br/>";
echo $selectedDay . "<br/>";
?>
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
<!--Tillfälliga knappar tills toolbaren finns-->
<button class="btn btn-primary" data-toggle="modal" data-target="#newEvent"><span class="fa-stack">
        <i class="fa fa-plus fa-stack-1x"></i>
        <i class="fa fa-sticky-note-o fa-stack-2x"></i>
    </span> Ny händelse
</button>
<div class="modal fade" id="newEvent" role="dialog" aria-labelledby="newEventLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" id="newEventHeader">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="newEventLabel">Lägg till en ny händelse</h4>
            </div>
            <form method="POST" action="newEvent.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="newEventTitle" class="sr-only">Titel</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa"><strong>T</strong></i></span>
                            <input class="form-control" id="newEventTitle" name="title" type="text"
                                   placeholder="Titel" required/>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="newEventStartDate" class="sr-only">Start datum</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input class="form-control" id="newEventStartDate" name="startDate" type="datetime-local"
                                   required/>
                        </div>
                        <label for="newEventEndDate" class="sr-only">Slut datum</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input class="form-control" id="newEventEndDate" name="endDate" type="datetime-local"
                                   required/>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="wholeDay" value=""/>
                                Heldags händelse
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span><i
                                class="fa fa-close"></i></span> Stäng
                    </button>
                    <button type="submit" value="" class="btn btn-primary"><span><i
                                class="fa fa-check"></i> Spara</span></button>
                </div>
            </form>
        </div>
    </div>
</div>
<a class="btn btn-sm btn-danger" href="logout.php"><span><i class="fa fa-sign-out fa-lg"></i></span> Logga ut</a>