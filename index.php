<?php

// ERROR REPORTING

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

include "app/php/php.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

        <h1>Wallet Forecast</h1>
        <h2>Po <?php print $months; ?> mėn. prognozuojamas likutis: <?php print $wallet; ?></h2>




    <!-- bootstrap js  -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/jqery.js"></script>
</body>

</html>