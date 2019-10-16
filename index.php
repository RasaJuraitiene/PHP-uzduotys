<?php

$days = 365;
$pack_price = 3.50;

$count_mon_fri = 0;
$count_sat = 0;
$count_sun = 0;
$count_mon_thu = 0;

for ($i = 1; $i <= $days; $i++) {

    $today = date("Y-m-d");
    $number = date('N', strtotime("+$i days"));

    if ($number <= 5) {
        $count_mon_fri += rand(1, 3);
    } elseif ($number == 6) {
        $count_sat += rand(10, 20);
    } elseif ($number == 6) {
        $count_sat += rand(10, 20);
    } else {
        $count_sun += rand(1, 3);
    }

    if ($number <= 4) {
        $count_mon_thu += rand(1, 3);
    }

}

$count_ttl = $count_mon_fri + $count_sat + $count_sun;
$price_ttl = $count_ttl / 20 * $pack_price;
$price_mon_thu = $count_mon_thu / 20 * $pack_price;

$h1 = 'Dainiaus dūmų skaičiuoklė:';
$h2 = "Per $days dienas, Dainius surūkys $count_ttl cigarečių už $price_ttl eur. Išvada - laikas mesti rūkyti!:)";
$h3 = "Nerūkydamas darbo dienomis, Dainius sutaupytų $price_mon_thu eur."

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

</head>

<body>

<h2><?php print $h1; ?></h2>
<h2><?php print $h2; ?></h2>
<h2><?php print $h3; ?></h2>

</body>

</html>
