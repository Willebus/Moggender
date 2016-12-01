<?php

include 'functions.php';

function monthForw() {
    $date = getdate();
    $month = $date['mon'];
    $month++;
    echo $month;
}

function monthBackw() {
    $date = getdate();
    $month = $date['mon'];
    $month--;
    echo $month;
}

if($_POST['action'] == 'monthForward') {
    monthForw();
}

if($_POST['action'] == 'monthBackward') {
    monthBackw();
}
?>