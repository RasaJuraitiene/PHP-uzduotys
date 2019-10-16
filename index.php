<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

for($i = 1; $i < $months; $i++ ){
    $wallet += $month_income - rand(600, 1000);

    if ($wallet < 0){
        break;
    }

}
    $h1 = 'Wallet Forecast';
    $h2 = "Atsargiai, $i mėnesį gali baigtis pinigai, pinigu balansas $wallet !";

    if ($wallet > 0){
        $h2 = "Po $i mėn., pinigu likutis $wallet !";

    }

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

        <h2> <?php print $h1; ?></h2>
        <h2> <?php print $h2; ?></h2>


    <!-- bootstrap js  -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/jqery.js"></script>
</body>

</html>
