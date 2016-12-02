<?php
$page = "start.php";
if (isset($_REQUEST["page"])) {
    $page = $_REQUEST["page"];
}
?>
<html>
<head>
    <meta charset="UTF-8">

    <!--Override CSS-->
    <link href="style.css" rel="stylesheet" type="text/css">
    <!--Bootstrap CSS-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--Font Awesome CSS-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--Bootstrap JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous" async></script>
    <!--jQuery till Bootstraps JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" async></script>

    <title>Välkommen till Moggender</title>
</head>
<body>
<div id="page_content">
    <?php
    require_once($page);
    ?>
</div>
</body>
</html>