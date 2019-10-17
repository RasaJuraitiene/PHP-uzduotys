<?php

$months = 24;
$car_price_new = 30000;
$depreciation = 2;

for ($i = 1; $i <= $months; $i++)
    $car_price_used = $car_price_new - $car_price_new / 2;
    $depr_perc = $car_price_used * 100 / 30000;

$h1 = "Kiek nuvertės mašina?";
$h2 = " Naujos mašinos kaina: $car_price_new";
$h3 = "Po $months mėn, mašinos vertė bus: $car_price_used eur";
$h4 = "Mašina nuvertės $depr_perc proc.";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

</head>

<body>

<h1><?php print $h1; ?></h1>
<h2><?php print $h2; ?></h2>
<h3><?php print $h3; ?></h3>
<h4><?php print $h4; ?></h4>

</body>

</html>
