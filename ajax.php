<?php

include 'functions.php';



function monthForw() {



}

function monthBackw() {
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