<?php

$days = 365;
$cigs_mon_fri = rand(1, 3);
$cigs_sat = rand(10, 20);
$cigs_sun = rand(1, 3);
$pack_price = 3.50;
$count_mon_fri = 0;
$count_sat = 0;
$count_sun = 0;


for ($i = 1; $i <= $days; $i++) {

    $today = date("Y-m-d");
    $number = date('N', strtotime($today));

    if ($number <= 5) {
        $count_mon_fri +=  rand(1, 3);
    }

    if ($number == 6) {
        $count_sat += rand(10, 20);
    }

    if ($number == 7) {
        $count_sun += rand(1, 3);
    }
}

$count_ttl = $count_mon_fri + $count_sat + $count_sun;
$price_ttl = $count_ttl / 20 * $pack_price;
$h1 = 'Dainiaus dūmų skaičiuoklė:';
$h2 = "Per $days dienas, Dainius surūkys $count_ttl cigarečių už $price_ttl eur. Išvada - laikas mesti rūkyti!:)";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

</head>

<body>

<h2><?php print $h1; ?></h2>
<h2><?php print $h2; ?></h2>

</body>

</html>
